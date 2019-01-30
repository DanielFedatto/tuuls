<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Visao extends ORM {

    protected $_table_name = "VISAO";
    protected $_primary_key = "VIS_ID";
        protected $_sorting = array("VIS_ID" => "asc");
    
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
            "VIS_TITULO" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 200)),
            ),
            "VIS_TEXTO" => array(
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS VISAO (
            VIS_ID INT (11) unsigned NOT NULL auto_increment,
            VIS_TITULO VARCHAR (200) NOT NULL ,
            VIS_TEXTO TEXT  NOT NULL ,
            PRIMARY KEY  (VIS_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
