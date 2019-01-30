<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Quemsomos extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Quem Somos";
        
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {

        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("quemsomos/list");
        
        $ordem = "QUS_ID";
        $sentido = "desc";

        //BUSCA OS REGISTROS        
        $quemsomos = ORM::factory("quemsomos");
                
        //SETA AS COLUNAS QUE VAI BUSCAR
        $quemsomos->setColumns(array("QUS_ID"=>"QUS_ID", "QUS_TITULO"=>"QUS_TITULO"));
        
        //TESTA SE TEM PESQUISA
        if(isset($_GET["chave"])){
            $quemsomos = $quemsomos->where("QUS_TITULO", "like", "%".$this->sane($_GET["chave"])."%");
        }
        
        /* ORDENAÇÃO */
        if (isset($_GET["ordem"])) {
            if ($_GET["ordem"] != "") {
                $quemsomos->order_by($this->sane($_GET["ordem"]), $this->sane($_GET["sentido"]));
                $ordem = $this->sane($_GET["ordem"]);
                $sentido = $this->sane($_GET["sentido"]);
            }
        }
        
        //PAGINAÇÃO
        $paginas = $this->action_page($quemsomos, $this->qtdPagina);
        $view->quemsomos = $paginas["data"];
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
        $view = View::Factory("quemsomos/edit");
        
        $id = $this->request->param("id");
        
        //SE EXISTIR O ID, BUSCA O REGISTRO
        if($id){
            //BUSCA O REGISTRO E PREENCHE OS CAMPOS
            $quemsomos = ORM::factory("quemsomos");
            $quemsomos = $quemsomos->where($quemsomos->primary_key(), "=", $this->sane($id))->find();
            
            $arr = array(
                "QUS_ID" => $quemsomos->QUS_ID,
                "QUS_TITULO" => $quemsomos->QUS_TITULO,
                "QUS_TUULS" => $quemsomos->QUS_TUULS,
                "QUS_PROPOSITO" => $quemsomos->QUS_PROPOSITO,
                "QUS_MISSAO" => $quemsomos->QUS_MISSAO,
                "QUS_VISAO" => $quemsomos->QUS_VISAO,
                "QUS_VALORES" => $quemsomos->QUS_VALORES,
            );
            
            $view->quemsomos = $arr;
        }else{
            //SENAO, SETA COMO VAZIO
            $arr = array( 
                "QUS_ID" => "0",
                "QUS_TITULO" => "",
                "QUS_TUULS" => "",
                "QUS_PROPOSITO" => "",
                "QUS_MISSAO" => "",
                "QUS_VISAO" => "",
                "QUS_VALORES" => "",
            );
            
            $view->quemsomos = $arr;
        }
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";

        //SE O ID ESTIVER ZERADO, INSERT
        if($this->request->post("QUS_ID") == "0" ){ 
            
            $quemsomos = ORM::factory("quemsomos");
            
            //INSERE
            foreach($this->request->post() as $campo => $value){
                $quemsomos->$campo = $value;
            }
            
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $quemsomos->save();
                $mensagem = "Registro inserido com sucesso!";
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
        }else{
            //SENAO, UPDATE
            $quemsomos = ORM::factory("quemsomos", $this->request->post("QUS_ID"));
            
            //SE CARREGOU O MÓDULO, FAZ O UPDATE. SENÃO, NÃO FAZ NADA
            if ($quemsomos->loaded()){
                //ALTERA
                foreach($this->request->post() as $campo => $value){
                    $quemsomos->$campo = $value;
                }
                
                //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
                try{
                    $query = $quemsomos->save();
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
        $quemsomos = ORM::factory("quemsomos", $this->request->param("id"));
            
        //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
        if ($quemsomos->loaded()){
            //DELETA
            $query = $quemsomos->delete();
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
                $quemsomos = ORM::factory("quemsomos", $val);
            
                //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
                if ($quemsomos->loaded()){
                    //DELETA
                    $query = $quemsomos->delete();
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

// End Quem Somos
