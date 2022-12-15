<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");

// $prod->defineCodigoBarras(000111);

// $prod->definePreco(9.55);

// $prod->detalhes();

$microondas = new App\Classes\Produto("Microondas", 110, 700);

$microondas->definePreco(900.00);
$microondas->defineCodigoBarras(000222);

$microondas->detalhes();