<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Conversaotuuls extends ORM {

    protected $_table_name = "CONVERSAO_TUULS";
    protected $_primary_key = "COT_ID";
        protected $_sorting = array("COT_ID" => "asc");
    
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
            "COT_TEXTO" => array(
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS CONVERSAO_TUULS (
            COT_ID INT (11) unsigned NOT NULL auto_increment,
            COT_TEXTO TEXT  NOT NULL ,
            PRIMARY KEY  (COT_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
