<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Linhaprodutos extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Linha Produtos";
        
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {

        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("linhaprodutos/list");
        
        $ordem = "LIP_ID";
        $sentido = "desc";

        //BUSCA OS REGISTROS        
        $linhaprodutos = ORM::factory("linhaprodutos");
                
        //SETA AS COLUNAS QUE VAI BUSCAR
        $linhaprodutos->setColumns(array("LIP_ID"=>"LIP_ID", "LIP_TEXTO"=>"LIP_TEXTO"));
        
        //TESTA SE TEM PESQUISA
        if(isset($_GET["chave"])){
            $linhaprodutos = $linhaprodutos->where("LIP_TEXTO", "like", "%".$this->sane($_GET["chave"])."%");
        }
        
        /* ORDENAÇÃO */
        if (isset($_GET["ordem"])) {
            if ($_GET["ordem"] != "") {
                $linhaprodutos->order_by($this->sane($_GET["ordem"]), $this->sane($_GET["sentido"]));
                $ordem = $this->sane($_GET["ordem"]);
                $sentido = $this->sane($_GET["sentido"]);
            }
        }
        
        //PAGINAÇÃO
        $paginas = $this->action_page($linhaprodutos, $this->qtdPagina);
        $view->linhaprodutos = $paginas["data"];
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
        $view = View::Factory("linhaprodutos/edit");
        
        $id = $this->request->param("id");
        
        //SE EXISTIR O ID, BUSCA O REGISTRO
        if($id){
            //BUSCA O REGISTRO E PREENCHE OS CAMPOS
            $linhaprodutos = ORM::factory("linhaprodutos");
            $linhaprodutos = $linhaprodutos->where($linhaprodutos->primary_key(), "=", $this->sane($id))->find();
            
            $arr = array(
                "LIP_ID" => $linhaprodutos->LIP_ID,
                "LIP_TEXTO" => $linhaprodutos->LIP_TEXTO,
            );
            
            $view->linhaprodutos = $arr;
        }else{
            //SENAO, SETA COMO VAZIO
            $arr = array( 
                "LIP_ID" => "0",
                "LIP_TEXTO" => "",
            );
            
            $view->linhaprodutos = $arr;
        }
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";

        //SE O ID ESTIVER ZERADO, INSERT
        if($this->request->post("LIP_ID") == "0" ){ 
            
            $linhaprodutos = ORM::factory("linhaprodutos");
            
            //INSERE
            foreach($this->request->post() as $campo => $value){
                $linhaprodutos->$campo = $value;
            }
            
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $linhaprodutos->save();
                $mensagem = "Registro inserido com sucesso!";
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
        }else{
            //SENAO, UPDATE
            $linhaprodutos = ORM::factory("linhaprodutos", $this->request->post("LIP_ID"));
            
            //SE CARREGOU O MÓDULO, FAZ O UPDATE. SENÃO, NÃO FAZ NADA
            if ($linhaprodutos->loaded()){
                //ALTERA
                foreach($this->request->post() as $campo => $value){
                    $linhaprodutos->$campo = $value;
                }
                
                //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
                try{
                    $query = $linhaprodutos->save();
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
    public function action_excluir(){/* NÃO EXCLUI
        $linhaprodutos = ORM::factory("linhaprodutos", $this->request->param("id"));
            
        //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
        if ($linhaprodutos->loaded()){
            //DELETA
            $query = $linhaprodutos->delete();
        }else{
            $query = false;
        }
        
        //SE FUNCIONOU, VOLTA PRA LISTAGEM COM MENSAGEM DE OK
        if($query){
            $this->action_index("<p class='res-alert trash'>Registro excluído com sucesso!</p>", false);
        }else{
            //SENAO, VOLTA COM MENSAGEM DE ERRO
            $this->action_index("<p class='res-alert warning'>Houve um problema!</p>", true);
        }*/ $this->request->redirect("linhaprodutos");
    }
    
    //EXCLUI TODOS REGISTROS MARCADOS
    public function action_excluirTodos() {/* NÃO EXCLUI$query = false;
        
        foreach ($this->request->post() as $value) {
            foreach($value as $val){
                $linhaprodutos = ORM::factory("linhaprodutos", $val);
            
                //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
                if ($linhaprodutos->loaded()){
                    //DELETA
                    $query = $linhaprodutos->delete();
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
        }*/ $this->request->redirect("linhaprodutos");}
    
    //FUNCAO DE PESQUISA
    public function action_pesquisa(){
        $this->action_index("", false);
    }

}

// End Linha Produtos
