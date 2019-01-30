<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Banners extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Banners";
        
        if ($this->request->is_ajax()) {
            $this->auto_render = FALSE;
        }
    }

    public function action_index($mensagem = "", $erro = false) {

        //INSTANCIA A VIEW DE LISTAGEM POR DEFAULT
        $view = View::Factory("banners/list");
        
        $ordem = "BAN_ID";
        $sentido = "desc";

        //BUSCA OS REGISTROS        
        $banners = ORM::factory("banners");
                
        //SETA AS COLUNAS QUE VAI BUSCAR
        $banners->setColumns(array("BAN_ID"=>"BAN_ID", "BAN_TITULO"=>"BAN_TITULO"));
        
        //TESTA SE TEM PESQUISA
        if(isset($_GET["chave"])){
            $banners = $banners->where("BAN_TITULO", "like", "%".$this->sane($_GET["chave"])."%");
        }
        
        /* ORDENAÇÃO */
        if (isset($_GET["ordem"])) {
            if ($_GET["ordem"] != "") {
                $banners->order_by($this->sane($_GET["ordem"]), $this->sane($_GET["sentido"]));
                $ordem = $this->sane($_GET["ordem"]);
                $sentido = $this->sane($_GET["sentido"]);
            }
        }
        
        //PAGINAÇÃO
        $paginas = $this->action_page($banners, $this->qtdPagina);
        $view->banners = $paginas["data"];
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
        $view = View::Factory("banners/edit");
        
        $id = $this->request->param("id");
        
        //SE EXISTIR O ID, BUSCA O REGISTRO
        if($id){
            //BUSCA O REGISTRO E PREENCHE OS CAMPOS
            $banners = ORM::factory("banners");
            $banners = $banners->where($banners->primary_key(), "=", $this->sane($id))->find();
            
            $arr = array(
                "BAN_ID" => $banners->BAN_ID,
                "BAN_TITULO" => $banners->BAN_TITULO,
            );
            
            $view->banners = $arr;
                    
            //BUSCA A IMAGEM, SE HOUVER
            $imagem = glob("upload/banners/thumb_" . $banners->BAN_ID . ".*");
            if ($imagem) {
                $view->imagem = "<div class='form-group'>
                        <label class='col-sm-2 control-label'>Excluir Imagem</label>
                        <input type='checkbox' id='excluirImagem' name='excluirImagem'>
                        <img src='" . url::base() . $imagem[0] . "'>
                    </div>";
            }
            else {
                $view->imagem = false;
            }
                    
            //BUSCA A IMAGEM_MOBILE, SE HOUVER
            $imagem_mobile = glob("upload/banners/imagem_mobile_thumb_" . $banners->BAN_ID . ".*");
            if ($imagem_mobile) {
                $view->imagem_mobile = "<div class='form-group'>
                        <label class='col-sm-2 control-label'>Excluir Imagem Mobile</label>
                        <input type='checkbox' id='excluirImagem_mobile' name='excluirImagem_mobile'>
                        <img src='" . url::base() . $imagem_mobile[0] . "'>
                    </div>";
            }
            else {
                $view->imagem_mobile = false;
            }
        }else{
            //SENAO, SETA COMO VAZIO
            $arr = array( 
                "BAN_ID" => "0",
                "BAN_TITULO" => "",
            );
            
            $view->banners = $arr;
            $view->imagem = false;
            $view->imagem_mobile = false;
        }
        
        $this->template->bt_voltar = true;
        
        $this->template->conteudo = $view;
    }
    
    //SALVA INFORMACOES
    public function action_save(){ //MENSAGEM DE OK, OU ERRO
        $mensagem = "Registro alterado com sucesso!";

        $excluiImagem = false;
                
        $excluiImagem_mobile = false;
                
        //SE O ID ESTIVER ZERADO, INSERT
        if($this->request->post("BAN_ID") == "0" ){ 
            
            $banners = ORM::factory("banners");
            
            //INSERE
            foreach($this->request->post() as $campo => $value){
                if ($campo == "imagem" or $campo == "imagemBlob" or $campo == "imagemx1" or $campo == "imagemy1" or $campo == "imagemw" or $campo == "imagemh") {
                    //NÃO SALVA NO BANCO, É O CAMPO COM A IMAGEM REDIMENSIONADA
                }
                else if ($campo == "imagem_mobile" or $campo == "imagem_mobileBlob" or $campo == "imagem_mobilex1" or $campo == "imagem_mobiley1" or $campo == "imagem_mobilew" or $campo == "imagem_mobileh") {
                    //NÃO SALVA NO BANCO, É O CAMPO COM A IMAGEM REDIMENSIONADA
                }else{ 
                    $banners->$campo = $value;
                }
            }
            
            //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
            try{
                $query = $banners->save();
                $mensagem = "Registro inserido com sucesso!";

                //INSERE A IMAGEM, SE EXISTIR
                if ($this->request->post("imagemBlob") != "") {
                    $imgBlob = $this->request->post("imagemBlob");

                    if(strpos($this->request->post("imagemBlob"), "image/jpg") or strpos($this->request->post("imagemBlob"), "image/jpeg")){
                        //JPEG
                        $imgBlob = str_replace("data:image/jpeg;base64,", "", $imgBlob);
                        $ext = "jpg";
                    }else if(strpos($this->request->post("imagemBlob"), "image/png")){
                        //PNG
                        $imgBlob = str_replace("data:image/png;base64,", "", $imgBlob);
                        $ext = "png";
                    }

                    $imgBlob = str_replace(" ", "+", $imgBlob);
                    $data = base64_decode($imgBlob);

                    //imagem tamanho normal
                    $imgName = "".$banners->pk() . ".".$ext;
                    file_put_contents(DOCROOT."upload/banners/".$imgName, $data);

                    //CROP
                    if($this->request->post("imagemw") != "" and $this->request->post("imagemw") > 0){
                        $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                        $img = $img->crop($this->request->post("imagemw"), $this->request->post("imagemh"), $this->request->post("imagemx1"), $this->request->post("imagemy1"))->save(DOCROOT."upload/banners/".$imgName);
                    }

                    //thumb
                    $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                    $imgName = "thumb_" . $banners->pk() . ".".$ext;
                    $img->resize(200)->save(DOCROOT."upload/banners/".$imgName);
                }

                //INSERE A IMAGEM_MOBILE, SE EXISTIR
                if ($this->request->post("imagem_mobileBlob") != "") {
                    $imgBlob = $this->request->post("imagem_mobileBlob");

                    if(strpos($this->request->post("imagem_mobileBlob"), "image/jpg") or strpos($this->request->post("imagem_mobileBlob"), "image/jpeg")){
                        //JPEG
                        $imgBlob = str_replace("data:image/jpeg;base64,", "", $imgBlob);
                        $ext = "jpg";
                    }else if(strpos($this->request->post("imagem_mobileBlob"), "image/png")){
                        //PNG
                        $imgBlob = str_replace("data:image/png;base64,", "", $imgBlob);
                        $ext = "png";
                    }

                    $imgBlob = str_replace(" ", "+", $imgBlob);
                    $data = base64_decode($imgBlob);

                    //imagem tamanho normal
                    $imgName = "imagem_mobile_".$banners->pk() . ".".$ext;
                    file_put_contents(DOCROOT."upload/banners/".$imgName, $data);

                    //CROP
                    if($this->request->post("imagem_mobilew") != "" and $this->request->post("imagem_mobilew") > 0){
                        $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                        $img = $img->crop($this->request->post("imagem_mobilew"), $this->request->post("imagem_mobileh"), $this->request->post("imagem_mobilex1"), $this->request->post("imagem_mobiley1"))->save(DOCROOT."upload/banners/".$imgName);
                    }

                    //thumb
                    $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                    $imgName = "imagem_mobile_thumb_" . $banners->pk() . ".".$ext;
                    $img->resize(200)->save(DOCROOT."upload/banners/".$imgName);
                }
            } catch (ORM_Validation_Exception $e){
                $query = false;
                $mensagem = $e->errors("models");
            }
        }else{
            //SENAO, UPDATE
            $banners = ORM::factory("banners", $this->request->post("BAN_ID"));
            
            //SE CARREGOU O MÓDULO, FAZ O UPDATE. SENÃO, NÃO FAZ NADA
            if ($banners->loaded()){
                //ALTERA
                foreach($this->request->post() as $campo => $value){
                    if ($campo == "excluirImagem") {
                        $excluiImagem = str_replace("'", "", $value);
                    }else if ($campo == "imagem" or $campo == "imagemBlob" or $campo == "imagemx1" or $campo == "imagemy1" or $campo == "imagemw" or $campo == "imagemh") {
                        //NÃO SALVA NO BANCO, É O CAMPO COM A IMAGEM REDIMENSIONADA
                    }
                    else if ($campo == "excluirImagem_mobile") {
                        $excluiImagem_mobile = str_replace("'", "", $value);
                    }else if ($campo == "imagem_mobile" or $campo == "imagem_mobileBlob" or $campo == "imagem_mobilex1" or $campo == "imagem_mobiley1" or $campo == "imagem_mobilew" or $campo == "imagem_mobileh") {
                        //NÃO SALVA NO BANCO, É O CAMPO COM A IMAGEM REDIMENSIONADA
                    }else{ 
                        $banners->$campo = $value;
                    }
                }
                
                //TENTA SALVAR. SE NÃO PASSAR NA VALIDAÇÃO, VAI PRO CATCH
                try{
                    $query = $banners->save();
                            
                    //SE EXCLUIR IMAGEM ESTIVER MARCADO, EXCLUI A IMAGEM
                    if($excluiImagem == "on" or $this->request->post("imagemBlob") != ""){
                        $imgsT = glob("upload/banners/thumb_" . $banners->pk() . ".*");
                        $imgs = glob("upload/banners/" . $banners->pk() . ".*");

                        if($imgs){
                            foreach($imgs as $im){
                                unlink($im);
                            }
                        }

                        if($imgsT){
                            foreach($imgsT as $imT){
                                unlink($imT);
                            }
                        }
                    }

                    //INSERE A IMAGEM, SE EXISTIR
                    if ($this->request->post("imagemBlob") != "") {
                        $imgBlob = $this->request->post("imagemBlob");

                        if(strpos($this->request->post("imagemBlob"), "image/jpg") or strpos($this->request->post("imagemBlob"), "image/jpeg")){
                            //JPEG
                            $imgBlob = str_replace("data:image/jpeg;base64,", "", $imgBlob);
                            $ext = "jpg";
                        }else if(strpos($this->request->post("imagemBlob"), "image/png")){
                            //PNG
                            $imgBlob = str_replace("data:image/png;base64,", "", $imgBlob);
                            $ext = "png";
                        }

                        $imgBlob = str_replace(" ", "+", $imgBlob);
                        $data = base64_decode($imgBlob);

                        //imagem tamanho normal
                        $imgName = "".$banners->pk() . ".".$ext;
                        file_put_contents(DOCROOT."upload/banners/".$imgName, $data);

                        //CROP
                        if($this->request->post("imagemw") != "" and $this->request->post("imagemw") > 0){
                            $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                            $img = $img->crop($this->request->post("imagemw"), $this->request->post("imagemh"), $this->request->post("imagemx1"), $this->request->post("imagemy1"))->save(DOCROOT."upload/banners/".$imgName);
                        }

                        //thumb
                        $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                        $imgName = "thumb_" . $banners->pk() . ".".$ext;
                        $img->resize(200)->save(DOCROOT."upload/banners/".$imgName);
                    }
                            
                    //SE EXCLUIR IMAGEM_MOBILE ESTIVER MARCADO, EXCLUI A IMAGEM_MOBILE
                    if($excluiImagem_mobile == "on" or $this->request->post("imagem_mobileBlob") != ""){
                        $imgsT = glob("upload/banners/imagem_mobile_thumb_" . $banners->pk() . ".*");
                        $imgs = glob("upload/banners/imagem_mobile_" . $banners->pk() . ".*");

                        if($imgs){
                            foreach($imgs as $im){
                                unlink($im);
                            }
                        }

                        if($imgsT){
                            foreach($imgsT as $imT){
                                unlink($imT);
                            }
                        }
                    }

                    //INSERE A IMAGEM, SE EXISTIR
                    if ($this->request->post("imagem_mobileBlob") != "") {
                        $imgBlob = $this->request->post("imagem_mobileBlob");

                        if(strpos($this->request->post("imagem_mobileBlob"), "image/jpg") or strpos($this->request->post("imagem_mobileBlob"), "image/jpeg")){
                            //JPEG
                            $imgBlob = str_replace("data:image/jpeg;base64,", "", $imgBlob);
                            $ext = "jpg";
                        }else if(strpos($this->request->post("imagem_mobileBlob"), "image/png")){
                            //PNG
                            $imgBlob = str_replace("data:image/png;base64,", "", $imgBlob);
                            $ext = "png";
                        }

                        $imgBlob = str_replace(" ", "+", $imgBlob);
                        $data = base64_decode($imgBlob);

                        //imagem tamanho normal
                        $imgName = "imagem_mobile_".$banners->pk() . ".".$ext;
                        file_put_contents(DOCROOT."upload/banners/".$imgName, $data);

                        //CROP
                        if($this->request->post("imagem_mobilew") != "" and $this->request->post("imagem_mobilew") > 0){
                            $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                            $img = $img->crop($this->request->post("imagem_mobilew"), $this->request->post("imagem_mobileh"), $this->request->post("imagem_mobilex1"), $this->request->post("imagem_mobiley1"))->save(DOCROOT."upload/banners/".$imgName);
                        }

                        //thumb
                        $img = Image::factory(DOCROOT."upload/banners/".$imgName);
                        $imgName = "imagem_mobile_thumb_" . $banners->pk() . ".".$ext;
                        $img->resize(200)->save(DOCROOT."upload/banners/".$imgName);
                    }
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
        if($query or $this->request->post("imagemBlob") != "" or $excluiImagem or $this->request->post("imagem_mobileBlob") != "" or $excluiImagem_mobile){
            $this->action_index("<p class='res-alert sucess'>".$mensagem."</p>", false);
        }else{
            //SENAO, VOLTA COM MENSAGEM DE ERRO
            $this->action_index("<p class='res-alert warning'>".$mensagem."</p>", true);
        }}
    
    //EXCLUI REGISTRO
    public function action_excluir(){
        //EXCLUI IMAGEM
        $imgsT = glob("upload/banners/thumb_" . $this->request->param("id") . ".*");
        $imgs = glob("upload/banners/" . $this->request->param("id") . ".*");

        if($imgs){
            foreach($imgs as $im){
                unlink($im);
            }
        }

        if($imgsT){
            foreach($imgsT as $imT){
                unlink($imT);
            }
        }
        //EXCLUI IMAGEM_MOBILE
        $imgsT = glob("upload/banners/imagem_mobile_thumb_" . $this->request->param("id") . ".*");
        $imgs = glob("upload/banners/imagem_mobile_" . $this->request->param("id") . ".*");

        if($imgs){
            foreach($imgs as $im){
                unlink($im);
            }
        }

        if($imgsT){
            foreach($imgsT as $imT){
                unlink($imT);
            }
        }
        $banners = ORM::factory("banners", $this->request->param("id"));
            
        //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
        if ($banners->loaded()){
            //DELETA
            $query = $banners->delete();
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
                //EXCLUI IMAGEM
                $imgsT = glob("upload/banners/thumb_" . $val . ".*");
                $imgs = glob("upload/banners/" . $val . ".*");

                if($imgs){
                    foreach($imgs as $im){
                        unlink($im);
                    }
                }

                if($imgsT){
                    foreach($imgsT as $imT){
                        unlink($imT);
                    }
                }
                //EXCLUI IMAGEM_MOBILE
                $imgsT = glob("upload/banners/imagem_mobile_thumb_" . $val . ".*");
                $imgs = glob("upload/banners/imagem_mobile_" . $val . ".*");

                if($imgs){
                    foreach($imgs as $im){
                        unlink($im);
                    }
                }

                if($imgsT){
                    foreach($imgsT as $imT){
                        unlink($imT);
                    }
                }
                $banners = ORM::factory("banners", $val);
            
                //SE CARREGOU O MÓDULO, DELETA. SENÃO, NÃO FAZ NADA
                if ($banners->loaded()){
                    //DELETA
                    $query = $banners->delete();
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

// End Banners
