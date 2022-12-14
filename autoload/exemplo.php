<?php

//require_once "../src/Classes/Produto.php";
//require_once "../src/Classes/Cliente.php";
//require_once "../src/Classes/Fornecedor.php";
//Com a função autoloado não se faz necessário o carregamento manual de arquivos

require_once "autoload.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = "(11) xxxx-xxxx"; 

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "123123123123";
$fornecedor->nomeFantasia = "Meu Armazem";
$fornecedor->razaoSocial = "Meu Armazen ltda";

var_dump($prod1, $cli, $fornecedor);