<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto;

$prod->titulo = "Cerveja";
$prod->preco = 3.00;
$prod->defineCodigoBarras(00111);

// $prod->detalhes();

$geladeira = new App\Classes\Eletrodomestico;

$geladeira->titulo = "Geladeira";
$geladeira->preco = 3000.00;
$geladeira->defineCodigoBarras(00112);
$geladeira->defineVoltagem(110);

// $geladeira->detalhes();


$microondas = new App\Classes\Microondas;

$microondas->titulo = "x2000";
$microondas->preco = 300.00;
$microondas->defineCodigoBarras(113);
$microondas->defineVoltagem(110);
$microondas->definePotencia(700);

$microondas->detalhes();
