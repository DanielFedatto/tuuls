<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Banners extends ORM {

    protected $_table_name = "BANNERS";
    protected $_primary_key = "BAN_ID";
        protected $_sorting = array("BAN_ID" => "desc");
    
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
            "BAN_TITULO" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 200)),
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS BANNERS (
            BAN_ID INT (11) unsigned NOT NULL auto_increment,
            BAN_TITULO VARCHAR (200) NOT NULL ,
            PRIMARY KEY  (BAN_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
