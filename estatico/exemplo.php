<?php

require_once "../autoload/autoload-psr4.php";

use App\Classes\Vendedor;
use App\Classes\Representante;

//echo Representante::comissao(true);

$joao = new Vendedor;
$joao->addVenda(100000);
echo $joao->minhaComissao();

// echo Vendedor::comissao();

// Vendedor::$bonus = 1.5;

// var_dump($Vendedor::$bonus);