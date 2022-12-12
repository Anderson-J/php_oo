<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;


$prod2 = clone $prod1;
$prod2->preco = 3.40;

function alterarProduto($produto)
{
    $produto->titutlo = "Skoll Litrão";

    return $produto;
}

$prod3 = alterarProduto(clone $prod1);

$prod2->titulo = "Itaipava";

var_dump($prod1);
var_dump($prod2);

var_dump($prod3);