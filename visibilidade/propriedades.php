<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");

$geladeira = new App\Classes\Eletrodomestico("Geladeira", 110);

$geladeira->definePreco(4500.55);

$geladeira->descricao = "Geladeira modelo x2000";

$geladeira->detalhes();
