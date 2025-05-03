<?php

function form_nao_enviado()
{
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function existe_campos_em_branco($dados)
{
    return empty($dados['produto']) || empty($dados['preco']) || empty($dados['quantidade']);
}

?>