<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "QUS_TITULO" => array(
        "not_empty" => "Título não pode ser vazio.",
        "min_length" => "Título deve ter pelo menos 3 caracteres.",
        "max_length" => "Título deve ter no máximo 250 caracteres."
    ),
    "QUS_TUULS" => array(
        "not_empty" => "Tuuls não pode ser vazio.",
    ),
    "QUS_PROPOSITO" => array(
        "not_empty" => "Propósito não pode ser vazio.",
    ),
    "QUS_MISSAO" => array(
        "not_empty" => "Missão não pode ser vazio.",
    ),
    "QUS_VISAO" => array(
        "not_empty" => "Visão não pode ser vazio.",
    ),
    "QUS_VALORES" => array(
        "not_empty" => "Valores não pode ser vazio.",
    ),
);
?>                
