<?php

$generica = new stdClass;

$generica->nome = "Anderson";
$generica->sobrenome = "Oliveira";

var_dump($generica);

$array =[
    "nome" => "Anderson",
    "sobrenome" => "Oliveira"
];

$objeto = (object) $array;

var_dump($objeto);