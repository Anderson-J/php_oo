<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Cliente("Anderson", "1299999999", 32);
$cli->cpf = "12345678911";

echo $cli->cidade;

$cli->alterar("Anderson Oliveira", 18);

$cli(true);

$cliSerializado = serialize($cli);

echo "<br>" . $cliSerializado . "<br><br>";

$cli2 = unserialize($cliSerializado);

echo "<br>" . $cli;

var_dump($cli, $cli2);