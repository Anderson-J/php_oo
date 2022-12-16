<?php

namespace App\Email\Adaptadores;

class AdaptadorBase implements AdaptadorInterface
{
    public function processar(): void
    {
        echo "processado com adaptador base";
    }
}