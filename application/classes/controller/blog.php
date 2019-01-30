<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Blog extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Blog";
        
    }

    public function action_index() {
        $view = View::Factory("blog");
        
        //BUSCA OS REGISTROS        
        $blog = ORM::factory("blog")->where("BLO_ATIVO", "=", "S")->order_by("BLO_DATA", "DESC");
      
        //PAGINAÇÃO
        $paginas = $this->action_page($blog, 8);
        $view->blog = $paginas["data"];
        $view->pagination = $paginas["pagination"];
        
        $this->template->conteudo = $view;
    }
    
    public function action_post() {
        $view = View::Factory("post");
        
        $this->template->titulo .= " - ".urldecode($this->request->param("titulo"));
        
        $view->blog = ORM::factory("blog")->where("BLO_ID", "=", $this->request->param("id"))->find_all();
        
        $this->template->conteudo = $view;
    }
}

// End Banners
?>