<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Sejaumfranqueado extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Seja um Franqueado";
        
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {

        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("sejaumfranqueado/list");
        
        $ordem = "SEF_ID";
        $sentido = "desc";

        //BUSCA OS REGISTROS        
        $sejaumfranqueado = ORM::factory("sejaumfranqueado");
                
        //SETA AS COLUNAS QUE VAI BUSCAR
        $sejaumfranqueado->setColumns(array("SEF_ID"=>"SEF_ID", "SEF_NOME"=>"SEF_NOME", "SEF_EMAIL"=>"SEF_EMAIL", "SEF_TELEFONE"=>"SEF_TELEFONE", "SEF_CELULAR"=>"SEF_CELULAR", "SEF_CIDADE"=>"SEF_CIDADE", "SEF_UF"=>"SEF_UF"));
        
        //TESTA SE TEM PESQUISA
        if(isset($_GET["chave"])){
            $sejaumfranqueado = $sejaumfranqueado->where("SEF_NOME", "like", "%".$this->sane($_GET["chave"])."%")->or_where("SEF_EMAIL", "like", "%".$this->sane($_GET["chave"])."%")->or_where("SEF_TELEFONE", "like", "%".$this->sane($_GET["chave"])."%")->or_where("SEF_CELULAR", "like", "%".$this->sane($_GET["chave"])."%")->or_where("SEF_CIDADE", "like", "%".$this->sane($_GET["chave"])."%")->or_where("SEF_UF", "like", "%".$this->sane($_GET["chave"])."%");
        }
        
        /* ORDENAÇÃO */
        if (isset($_GET["ordem"])) {
            if ($_GET["ordem"] != "") {
                $sejaumfranqueado->order_by($this->sane($_GET["ordem"]), $this->sane($_GET["sentido"]));
                $ordem = $this->sane($_GET["ordem"]);
                $sentido = $this->sane($_GET["sentido"]);
            }
        }
        
        //PAGINAÇÃO
        $paginas = $this->action_page($sejaumfranqueado, $this->qtdPagina);
        $view->sejaumfranqueado = $paginas["data"];
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
        $view = View::Factory("sejaumfranqueado/edit");
        
        $id = $this->request->param("id");
        
        //SE EXISTIR O ID, BUSCA O REGISTRO
        if($id){
            //BUSCA O REGISTRO E PREENCHE OS CAMPOS
            $sejaumfranqueado = ORM::factory("sejaumfranqueado");
            $sejaumfranqueado = $sejaumfranqueado->where($sejaumfranqueado->primary_key(), "=", $this->sane($id))->find();
            
            $arr = array(
                "SEF_ID" => $sejaumfranqueado->SEF_ID,
                "SEF_NOME" => $sejaumfranqueado->SEF_NOME,
                "SEF_EMAIL" => $sejaumfranqueado->SEF_EMAIL,
                "SEF_TELEFONE" => $sejaumfranqueado->SEF_TELEFONE,
                "SEF_CELULAR" => $sejaumfranqueado->SEF_CELULAR,
                "SEF_RG" => $sejaumfranqueado->SEF_RG,
                "SEF_CPF" => $sejaumfranqueado->SEF_CPF,
                "SEF_ENDERECO" => $sejaumfranqueado->SEF_ENDERECO,
                "SEF_CIDADE" => $sejaumfranqueado->SEF_CIDADE,
                "SEF_UF" => $sejaumfranqueado->SEF_UF,
                "SEF_PROFISSAO" => $sejaumfranqueado->SEF_PROFISSAO,
                "SEF_CAPACIDADE_INVESTIMENTO" => $sejaumfranqueado->SEF_CAPACIDADE_INVESTIMENTO,
                "SEF_CIDADE_INTERESSE" => $sejaumfranqueado->SEF_CIDADE_INTERESSE,
                "SEF_UF_INTERESSE" => $sejaumfranqueado->SEF_UF_INTERESSE,
                "SEF_NASCIMENTO" => $sejaumfranqueado->SEF_NASCIMENTO,
                "SEF_OUTRA_ATIVIDADE" => $sejaumfranqueado->SEF_OUTRA_ATIVIDADE,
                "SEF_DISPONIBILIDADE" => $sejaumfranqueado->SEF_DISPONIBILIDADE,
                "SEF_EXPERIENCIA" => $sejaumfranqueado->SEF_EXPERIENCIA,
                "SEF_SOCIO" => $sejaumfranqueado->SEF_SOCIO,
                "SEF_DISPOE_PONTO" => $sejaumfranqueado->SEF_DISPOE_PONTO,
                "SEF_OUTRA_FRANQUIA" => $sejaumfranqueado->SEF_OUTRA_FRANQUIA,
                "SEF_QUAL" => $sejaumfranqueado->SEF_QUAL,
            );
            
            $view->sejaumfranqueado = $arr;
        }else{
            //SENAO, SETA COMO VAZIO
            $arr = array( 
                "SEF_ID" => "0",
                "SEF_NOME" => "",
                "SEF_EMAIL" => "",
                "SEF_TELEFONE" => "",
                "SEF_CELULAR" => "",
                "SEF_RG" => "",
                "SEF_CPF" => "",
                "SEF_ENDERECO" => "",
                "SEF_CIDADE" => "",
                "SEF_UF" => "",
                "SEF_PROFISSAO" => "",
                "SEF_CAPACIDADE_INVESTIMENTO" => "1",
                "SEF_CIDADE_INTERESSE" => "",
                "SEF_UF_INTERESSE" => "",
                "SEF_NASCIMENTO" => date("Y-m-d"),
                "SEF_OUTRA_ATIVIDADE" => "S",
                "SEF_DISPONIBILIDADE" => "1",
                "SEF_EXPERIENCIA" => "S",
                "SEF_SOCIO" => "S",
                "SEF_DISPOE_PONTO" => "S",
                "SEF_OUTRA_FRANQUIA" => "S",
                "SEF_QUAL" => "",
            );
            
            $view->sejaumfranqueado = $arr;
        }
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";

        //SE O ID ESTIVER ZERADO, INSERT
        if($this->request->post("SEF_ID") == "0" ){ 
            
            $sejaumfranqueado = ORM::factory("sejaumfranqueado");
            
            //INSERE
            foreach($this->request->post() as $campo => $value){
                $sejaumfranqueado->$campo = $value;
            }
            
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $sejaumfranqueado->save();
                $mensagem = "Registro inserido com sucesso!";
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
        }else{
            //SENAO, UPDATE
            $sejaumfranqueado = ORM::factory("sejaumfranqueado", $this->request->post("SEF_ID"));
            
            //SE CARREGOU O MÓDULO, FAZ O UPDATE. SENÃO, NÃO FAZ NADA
            if ($sejaumfranqueado->loaded()){
                //ALTERA
                foreach($this->request->post() as $campo => $value){
                    $sejaumfranqueado->$campo = $value;
                }
                
                //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
                try{
                    $query = $sejaumfranqueado->save();
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
        $sejaumfranqueado = ORM::factory("sejaumfranqueado", $this->request->param("id"));
            
        //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
        if ($sejaumfranqueado->loaded()){
            //DELETA
            $query = $sejaumfranqueado->delete();
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
                $sejaumfranqueado = ORM::factory("sejaumfranqueado", $val);
            
                //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
                if ($sejaumfranqueado->loaded()){
                    //DELETA
                    $query = $sejaumfranqueado->delete();
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

// End Sejaum Franqueado
