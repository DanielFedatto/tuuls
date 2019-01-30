<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "DEP_DESCRICAO" => array(
        "not_empty" => "Descrição não pode ser vazio.",
    ),
    "DEP_CLIENTE" => array(
        "not_empty" => "Cliente não pode ser vazio.",
        "min_length" => "Cliente deve ter pelo menos 3 caracteres.",
        "max_length" => "Cliente deve ter no máximo 100 caracteres."
    ),
    "DEP_APROVADO" => array(
        "not_empty" => "Aprovado não pode ser vazio.",
        "valorSN" => "Aprovado: Valor inválido."
    ),
);
?>                
