<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Cerveja");
$prod->defineCodigoBarras(0001);
$prod->definePreco(14);

$prod->detalhes();