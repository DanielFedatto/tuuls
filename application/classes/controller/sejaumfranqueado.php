<?php

defined("SYSPATH") or die("No direct script access.");

class Controller_Sejaumfranqueado extends Controller_Index {

    public function before() {
        parent::before();
        $this->_name = $this->request->controller();
        $this->template->titulo .= " - Seja um Franqueado";
        
    }

    public function action_index() {
        $view = View::Factory("sejaumfranqueado");
        
        
        $this->template->conteudo = $view;
    }
}

// End Banners
