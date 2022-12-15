<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");
//$prod->detalhes();

$geladeira = new App\Classes\Eletrodomestico("Geladeira", 110);
// $geladeira->detalhes();

var_dump($geladeira);

$microondas = new App\Classes\Microondas("Microondas", 110, 700);
$microondas->detalhes();

var_dump($microondas);