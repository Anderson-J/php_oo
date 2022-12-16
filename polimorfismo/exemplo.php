<?php

require_once "../autoload/autoload-psr4.php";

$email = new App\Email\Envio;

$mailgun = new App\Email\Adaptadores\Mailgun\Adaptador;

$SES = new App\Email\Adaptadores\SES\Adaptador;

$base = new App\Email\Adaptadores\AdaptadorBase;

$email->enviar($base);

