<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\AdaptadorInterface;


const VERSAO = 1.0;

class Envio
{
    public function enviar(AdaptadorInterface $adaptador): void
    {
        $adaptador->processar();
    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }

}

function validar(string $email): void
{
    echo "O endereço é váĺido";
}