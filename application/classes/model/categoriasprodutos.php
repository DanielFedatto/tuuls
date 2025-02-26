<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Categoriasprodutos extends ORM {

    protected $_table_name = "CATEGORIAS_PRODUTOS";
    protected $_primary_key = "CAP_ID";
        protected $_sorting = array("CAP_ID" => "asc");
    
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
            "CAP_NOME" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 250)),
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS CATEGORIAS_PRODUTOS (
            CAP_ID INT (11) unsigned NOT NULL auto_increment,
            CAP_NOME VARCHAR (250) NOT NULL ,
            PRIMARY KEY  (CAP_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
