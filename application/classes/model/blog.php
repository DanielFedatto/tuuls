<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Blog extends ORM {

    protected $_table_name = "BLOG";
    protected $_primary_key = "BLO_ID";
        protected $_sorting = array("BLO_DATA" => "desc");
    
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
            "BLO_TITULO" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 250)),
            ),
            "BLO_DATA" => array(
                array("not_empty"),
            ),
            "BLO_ATIVO" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
            "BLO_TEXTO" => array(
                array("not_empty"),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
            "BLO_DATA" => array(
                array(array($this, "arrumaData")),
            ),
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS BLOG (
            BLO_ID INT (11) unsigned NOT NULL auto_increment,
            BLO_TITULO VARCHAR (250) NOT NULL ,
            BLO_DATA DATE  NOT NULL ,
            BLO_ATIVO SET ('S','N') NOT NULL  default 'S',
            BLO_TEXTO TEXT  NOT NULL ,
            PRIMARY KEY  (BLO_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
}
