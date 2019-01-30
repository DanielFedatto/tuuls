<?php

//These corespond to the fields that we are invalidating in our model and the error message that will be displayed on our form
return array(
    "SEF_NOME" => array(
        "not_empty" => "Nome não pode ser vazio.",
        "min_length" => "Nome deve ter pelo menos 3 caracteres.",
        "max_length" => "Nome deve ter no máximo 250 caracteres."
    ),
    "SEF_EMAIL" => array(
        "not_empty" => "Email não pode ser vazio.",
        "min_length" => "Email deve ter pelo menos 3 caracteres.",
        "max_length" => "Email deve ter no máximo 200 caracteres."
    ),
    "SEF_CELULAR" => array(
        "not_empty" => "Celular não pode ser vazio.",
        "min_length" => "Celular deve ter pelo menos 3 caracteres.",
        "max_length" => "Celular deve ter no máximo 20 caracteres."
    ),
    "SEF_ENDERECO" => array(
        "not_empty" => "Endereço não pode ser vazio.",
        "min_length" => "Endereço deve ter pelo menos 3 caracteres.",
        "max_length" => "Endereço deve ter no máximo 250 caracteres."
    ),
    "SEF_CIDADE" => array(
        "not_empty" => "Cidade não pode ser vazio.",
        "min_length" => "Cidade deve ter pelo menos 3 caracteres.",
        "max_length" => "Cidade deve ter no máximo 200 caracteres."
    ),
    "SEF_UF" => array(
        "not_empty" => "UF não pode ser vazio.",
        "min_length" => "UF deve ter pelo menos 3 caracteres.",
        "max_length" => "UF deve ter no máximo 2 caracteres."
    ),
    "SEF_CAPACIDADE_INVESTIMENTO" => array(
        "not_empty" => "Capacidade Investimento não pode ser vazio.",
        "valor1234" => "Capacidade Investimento: Valor inválido."
    ),
    "SEF_OUTRA_ATIVIDADE" => array(
        "not_empty" => "Outra Atividade não pode ser vazio.",
        "valorSN" => "Outra Atividade: Valor inválido."
    ),
    "SEF_DISPONIBILIDADE" => array(
        "not_empty" => "Disponibilidade não pode ser vazio.",
        "valor123" => "Disponibilidade: Valor inválido."
    ),
    "SEF_EXPERIENCIA" => array(
        "not_empty" => "Experiência não pode ser vazio.",
        "valorSN" => "Experiência: Valor inválido."
    ),
    "SEF_SOCIO" => array(
        "not_empty" => "Sócio não pode ser vazio.",
        "valorSN" => "Sócio: Valor inválido."
    ),
    "SEF_DISPOE_PONTO" => array(
        "not_empty" => "Dispoe Ponto não pode ser vazio.",
        "valorSN" => "Dispoe Ponto: Valor inválido."
    ),
    "SEF_OUTRA_FRANQUIA" => array(
        "not_empty" => "Outra Franquia não pode ser vazio.",
        "valorSN" => "Outra Franquia: Valor inválido."
    ),
);
?>                
