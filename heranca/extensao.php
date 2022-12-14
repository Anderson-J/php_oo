<?php

require_once "../autoload/autoload-psr4.php";

$obj = new App\Classes\Microondas;

$obj->titulo = "Geladeira";
$obj->preco = 900.00;
$obj->defineCodigoBarras('00111');

$obj->voltagem = 110;

$obj->definePotencia(620);

$obj->detalhes();