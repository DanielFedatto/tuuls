<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Quemsomos extends ORM {

    protected $_table_name = "QUEM_SOMOS";
    protected $_primary_key = "QUS_ID";
        protected $_sorting = array("QUS_ID" => "asc");
    
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
            "QUS_TITULO" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 250)),
            ),
            "QUS_TUULS" => array(
                array("not_empty"),
            ),
            "QUS_PROPOSITO" => array(
                array("not_empty"),
            ),
            "QUS_MISSAO" => array(
                array("not_empty"),
            ),
            "QUS_VISAO" => array(
                array("not_empty"),
            ),
            "QUS_VALORES" => array(
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
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS QUEM_SOMOS (
            QUS_ID INT (11) unsigned NOT NULL auto_increment,
            QUS_TITULO VARCHAR (250) NOT NULL ,
            QUS_TUULS TEXT  NOT NULL ,
            QUS_PROPOSITO TEXT  NOT NULL ,
            QUS_MISSAO TEXT  NOT NULL ,
            QUS_VISAO TEXT  NOT NULL ,
            QUS_VALORES TEXT  NOT NULL ,
            PRIMARY KEY  (QUS_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
