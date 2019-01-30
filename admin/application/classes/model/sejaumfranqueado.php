<?php

defined("SYSPATH") OR die("No Direct Script Access");

Class Model_Sejaumfranqueado extends ORM {

    protected $_table_name = "SEJAUM_FRANQUEADO";
    protected $_primary_key = "SEF_ID";
        protected $_sorting = array("SEF_ID" => "desc");
    
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
            "SEF_NOME" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 250)),
            ),
            "SEF_EMAIL" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 200)),
            ),
            "SEF_CELULAR" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 20)),
            ),
            "SEF_ENDERECO" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 250)),
            ),
            "SEF_CIDADE" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 200)),
            ),
            "SEF_UF" => array(
                array("not_empty"),
                array("min_length", array(":value", 3)),
                array("max_length", array(":value", 2)),
            ),
            "SEF_CAPACIDADE_INVESTIMENTO" => array(
                array("not_empty"),
                array(array($this, "valor1234")),
            ),
            "SEF_OUTRA_ATIVIDADE" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
            "SEF_DISPONIBILIDADE" => array(
                array("not_empty"),
                array(array($this, "valor123")),
            ),
            "SEF_EXPERIENCIA" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
            "SEF_SOCIO" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
            "SEF_DISPOE_PONTO" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
            "SEF_OUTRA_FRANQUIA" => array(
                array("not_empty"),
                array(array($this, "valorSN")),
            ),
        );
    }
    
    //FILTROS
    public function filters(){
        return array(
            "SEF_NASCIMENTO" => array(
                array(array($this, "arrumaData")),
            ),
        );
    }

    public function __construct($id = NULL) {
        //GERA A TABELA
        Database::instance()->query(Database::INSERT, "CREATE TABLE IF NOT EXISTS SEJAUM_FRANQUEADO (
            SEF_ID INT (11) unsigned NOT NULL auto_increment,
            SEF_NOME VARCHAR (250) NOT NULL ,
            SEF_EMAIL VARCHAR (200) NOT NULL ,
            SEF_TELEFONE VARCHAR (20) NULL ,
            SEF_CELULAR VARCHAR (20) NOT NULL ,
            SEF_RG VARCHAR (20) NULL ,
            SEF_CPF VARCHAR (20) NULL ,
            SEF_ENDERECO VARCHAR (250) NOT NULL ,
            SEF_CIDADE VARCHAR (200) NOT NULL ,
            SEF_UF VARCHAR (2) NOT NULL ,
            SEF_PROFISSAO VARCHAR (250) NULL ,
            SEF_CAPACIDADE_INVESTIMENTO SET ('1','2','3','4') NOT NULL  default '1',
            SEF_CIDADE_INTERESSE VARCHAR (250) NULL ,
            SEF_UF_INTERESSE VARCHAR (250) NULL ,
            SEF_NASCIMENTO DATE  NULL ,
            SEF_OUTRA_ATIVIDADE SET ('S','N') NOT NULL  default 'S',
            SEF_DISPONIBILIDADE SET ('1','2','3') NOT NULL  default '1',
            SEF_EXPERIENCIA SET ('S','N') NOT NULL  default 'S',
            SEF_SOCIO SET ('S','N') NOT NULL  default 'S',
            SEF_DISPOE_PONTO SET ('S','N') NOT NULL  default 'S',
            SEF_OUTRA_FRANQUIA SET ('S','N') NOT NULL  default 'S',
            SEF_QUAL VARCHAR (250) NULL ,
            PRIMARY KEY  (SEF_ID)
        )ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");
        
        parent::__construct($id);
    }
    
    //ACEITA APENAS OS VALORES "1" OU "2" OU "3" OU "4" (PARA VALOR 1 OU 2 OU 3 OU 4)
    public function valor1234($valor) {
        //VERIFICA SE VALOR É VALIDO
        if($valor != "1" and $valor != "2" and $valor != "3" and $valor != "4"){
            return false;
        }else    return true;
    }
    
    //ACEITA APENAS OS VALORES "1" OU "2" OU "3" (PARA VALOR 1 OU 2 OU 3)
    public function valor123($valor) {
        //VERIFICA SE VALOR É VALIDO
        if($valor != "1" and $valor != "2" and $valor != "3"){
            return false;
        }else    return true;
    }
}
