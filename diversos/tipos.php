<?php

declare(strict_types = 1); // declaração para tornar tipagem forte

require_once "src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "123123123123";
$fornecedor->nomeFantasia = "Meu Armazen";
// $fornecedor->nomeFantasia = true; // Erro de atribuição por tipagem errada, o único tipo de conversão aceita é do tipo inteiro para float
$fornecedor->razaoSocial = "Meu Armazen ltda";

// $fornecedor->autorizar("string"); // erro do tipo Type Error

var_dump($fornecedor);