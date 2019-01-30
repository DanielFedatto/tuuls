<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Vantagens extends ORM {

    protected $_table_name = "VANTAGENS";
    protected $_primary_key = "VAN_ID";
        protected $_sorting = array("VAN_ID" => "asc");
    
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
            "VAN_TITULO" => array(
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS VANTAGENS (
            VAN_ID INT (11) unsigned NOT NULL auto_increment,
            VAN_TITULO VARCHAR (250) NOT NULL ,
            PRIMARY KEY  (VAN_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
