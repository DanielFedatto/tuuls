<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Linhaprodutos extends ORM {

    protected $_table_name = "LINHA_PRODUTOS";
    protected $_primary_key = "LIP_ID";
        protected $_sorting = array("LIP_ID" => "asc");
    
    //RELATIONSHIP
    protected $_belongs_to = array(
    );
    protected $_has_many = array(
    );
                
    //REGRAS DE VALIDAÇÃO
    //Define all validations our model must pass before being saved
    //Notice how the errors defined here correspond to the errors defined in our Messages file
    public function rules() {
        return array(
            "LIP_TEXTO" => array(
                array("not_empty"),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS LINHA_PRODUTOS (
            LIP_ID INT (11) unsigned NOT NULL auto_increment,
            LIP_TEXTO TEXT  NOT NULL ,
            PRIMARY KEY  (LIP_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
