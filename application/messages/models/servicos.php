<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "SER_NOME" => array(
        "not_empty" => "Nome não pode ser vazio.",
        "min_length" => "Nome deve ter pelo menos 3 caracteres.",
        "max_length" => "Nome deve ter no máximo 100 caracteres."
    ),
    "SER_DESCRICAO" => array(
        "not_empty" => "Descrição não pode ser vazio.",
    ),
);
?>                
