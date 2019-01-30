<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Quemsomos extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Quem Somos";
        
    }

    public function action_index() {
        $view = View::Factory("quemsomos");
        
        //BUSCA OS REGISTROS        
        $view->quemsomos = ORM::factory("quemsomos")->find_all();
        
        $this->template->conteudo = $view;
    }
    
}

// End Banners
?>