<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "EQU_NOME" => array(
        "not_empty" => "Nome não pode ser vazio.",
        "min_length" => "Nome deve ter pelo menos 3 caracteres.",
        "max_length" => "Nome deve ter no máximo 100 caracteres."
    ),
    "EQU_FUNCAO" => array(
        "not_empty" => "Função não pode ser vazio.",
        "min_length" => "Função deve ter pelo menos 3 caracteres.",
        "max_length" => "Função deve ter no máximo 100 caracteres."
    ),
    "EQU_DESCRICAO" => array(
        "not_empty" => "Descrição não pode ser vazio.",
    ),
);
?>                
