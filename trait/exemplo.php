<?php

require_once "../autoload/autoload-psr4.php";

$cliente = new App\Classes\Cliente;
$cliente->setNome = "Anderson";
$cliente->setIdade = 32;
$cliente->setId = 123;
$cliente->setTelefone = "12345678900";
$cliente->setEndereco = "Rua legal";

$produto = new App\Classes\Produto("Cerveja");
$produto->defineCodigoBarras(56489);
$produto->definePreco(5.20);

$pedido = new App\Classes\pedido($cliente, $produto);

var_dump($pedido);