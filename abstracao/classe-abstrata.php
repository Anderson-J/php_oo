<?php

require_once "../autoload/autoload-psr4.php";

$cliente = new App\Classes\Cliente;

$cliente->setId(1);
$cliente->setNome("Anderson");
$cliente->setIdade(32);
$cliente->setTelefone("1234567890");
$cliente->setEndereco("Rua das Couves");

var_dump($cliente);