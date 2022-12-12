<?php

require_once "src/Classes/Fornecedor.php";

class Usuario
{
    public $nome = "joao";
    public $senha = "123456";
}

$joao = new Usuario;

$fornecedor = new Fornecedor;

$fornecedor->autorizar($joao);

echo "<br>";

$outroFornecedor = new Fornecedor;

$outroFornecedor->autorizar(new class {
    public $nome = "joao";
    public $senha = "123456";
});

