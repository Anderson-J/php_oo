<?php

require_once "../src/Email/Envio.php";
require_once "../src/Email/Adaptadores/Mailgun/Adaptador.php";
require_once "../src/Email/Transporte.php";


$email = new \App\Email\Envio;

$email->enviar();

var_dump($email);