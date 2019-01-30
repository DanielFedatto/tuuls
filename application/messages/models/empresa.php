<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "EMP_TITULO" => array(
        "not_empty" => "Título não pode ser vazio.",
        "min_length" => "Título deve ter pelo menos 3 caracteres.",
        "max_length" => "Título deve ter no máximo 100 caracteres."
    ),
    "EMP_DESCRICAO" => array(
        "not_empty" => "Descrição não pode ser vazio.",
    ),
);
?>                
