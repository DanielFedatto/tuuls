<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Conversaotopicos extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Conversão Tópicos";
        
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {

        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("conversaotopicos/list");
        
        $ordem = "COT_ID";
        $sentido = "desc";

        //BUSCA OS REGISTROS        
        $conversaotopicos = ORM::factory("conversaotopicos");
                
        //SETA AS COLUNAS QUE VAI BUSCAR
        $conversaotopicos->setColumns(array("COT_ID"=>"COT_ID", "COT_TITULO"=>"COT_TITULO"));
        
        //TESTA SE TEM PESQUISA
        if(isset($_GET["chave"])){
            $conversaotopicos = $conversaotopicos->where("COT_TITULO", "like", "%".$this->sane($_GET["chave"])."%");
        }
        
        /* ORDENAÇÃO */
        if (isset($_GET["ordem"])) {
            if ($_GET["ordem"] != "") {
                $conversaotopicos->order_by($this->sane($_GET["ordem"]), $this->sane($_GET["sentido"]));
                $ordem = $this->sane($_GET["ordem"]);
                $sentido = $this->sane($_GET["sentido"]);
            }
        }
        
        //PAGINAÇÃO
        $paginas = $this->action_page($conversaotopicos, $this->qtdPagina);
        $view->conversaotopicos = $paginas["data"];
        $view->pagination = $paginas["pagination"];
        
        $view->ordem = $ordem;
        $view->sentido = $sentido;

        //PASSA A MENSAGEM
        $view->mensagem = $mensagem;
        $view->erro = $erro;
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }

    //FORMULARIO DE CADASTRO
    public function action_edit(){
        //INSTANCIA A VIEW DE EDICAO
        $view = View::Factory("conversaotopicos/edit");
        
        $id = $this->request->param("id");
        
        //SE EXISTIR O ID, BUSCA O REGISTRO
        if($id){
            //BUSCA O REGISTRO E PREENCHE OS CAMPOS
            $conversaotopicos = ORM::factory("conversaotopicos");
            $conversaotopicos = $conversaotopicos->where($conversaotopicos->primary_key(), "=", $this->sane($id))->find();
            
            $arr = array(
                "COT_ID" => $conversaotopicos->COT_ID,
                "COT_TITULO" => $conversaotopicos->COT_TITULO,
                "COT_TEXTO" => $conversaotopicos->COT_TEXTO,
            );
            
            $view->conversaotopicos = $arr;
        }else{
            //SENAO, SETA COMO VAZIO
            $arr = array( 
                "COT_ID" => "0",
                "COT_TITULO" => "",
                "COT_TEXTO" => "",
            );
            
            $view->conversaotopicos = $arr;
        }
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";

        //SE O ID ESTIVER ZERADO, INSERT
        if($this->request->post("COT_ID") == "0" ){ 
            
            $conversaotopicos = ORM::factory("conversaotopicos");
            
            //INSERE
            foreach($this->request->post() as $campo => $value){
                $conversaotopicos->$campo = $value;
            }
            
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $conversaotopicos->save();
                $mensagem = "Registro inserido com sucesso!";
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
        }else{
            //SENAO, UPDATE
            $conversaotopicos = ORM::factory("conversaotopicos", $this->request->post("COT_ID"));
            
            //SE CARREGOU O MÓDULO, FAZ O UPDATE. SENÃO, NÃO FAZ NADA
            if ($conversaotopicos->loaded()){
                //ALTERA
                foreach($this->request->post() as $campo => $value){
                    $conversaotopicos->$campo = $value;
                }
                
                //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
                try{
                    $query = $conversaotopicos->save();
                } catch (ORM_Validation_Exception $e){
                    $query = false;
                    $mensagem = $e->errors("models");
                }
            } else{
                $query = false;
                $mensagem = "Houve um problema, nenhuma alteração realizada!";
            }
        }
        
        //SE MENSAGEM FOR ARRAY, TRANSFORMA EM STRING
        if(is_array($mensagem)){
            $men = "";
            foreach($mensagem as $m){
                $men .= $m."<br>";
            }
            $mensagem = $men;
        }
        
        //SE FUNCIONOU, VOLTA PRA LISTAGEM COM MENSAGEM DE OK
        if($query){
            $this->action_index("<p class='res-alert sucess'>".$mensagem."</p>", false);
        }else{
            //SENAO, VOLTA COM MENSAGEM DE ERRO
            $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", true);
        }}
    
    //EXCLUI REGISTRO
    public function action_excluir(){
        $conversaotopicos = ORM::factory("conversaotopicos", $this->request->param("id"));
            
        //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
        if ($conversaotopicos->loaded()){
            //DELETA
            $query = $conversaotopicos->delete();
        }else{
            $query = false;
        }
        
        //SE FUNCIONOU, VOLTA PRA LISTAGEM COM MENSAGEM DE OK
        if($query){
            $this->action_index("<p class='res-alert trash'>Registro excluído com sucesso!</p>", false);
        }else{
            //SENAO, VOLTA COM MENSAGEM DE ERRO
            $this->action_index("<p class='res-alert warning'>Houve um problema!</p>", true);
        }
    }
    
    //EXCLUI TODOS REGISTROS MARCADOS
    public function action_excluirTodos() {$query = false;
        
        foreach ($this->request->post() as $value) {
            foreach($value as $val){
                $conversaotopicos = ORM::factory("conversaotopicos", $val);
            
                //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
                if ($conversaotopicos->loaded()){
                    //DELETA
                    $query = $conversaotopicos->delete();
                }else{
                    $query = false;
                }
            }
        }
        
        //SE FUNCIONOU, VOLTA PRA LISTAGEM COM MENSAGEM DE OK
        if ($query) {
            $this->action_index("<p class='res-alert trash'>Registros excluídos com sucesso!</p>", false);
        }
        else {
            //SENAO, VOLTA COM MENSAGEM DE ERRO
            $this->action_index("<p class='res-alert warning'>Houve um problema! Nenhum registro selecionado!</p>", true);
        }}
    
    //FUNCAO DE PESQUISA
    public function action_pesquisa(){
        $this->action_index("", false);
    }

}

// End Conversão Tópicos
