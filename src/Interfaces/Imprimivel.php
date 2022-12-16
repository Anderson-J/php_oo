<?php

namespace App\Interfaces;

interface Imprimivel extends Retornavel
{
    public function detalhes(): void;
}