<?php

namespace App\Classes;

use App\Classes\Produto;

class Eletrodomestico extends Produto
{
    public int $voltagem;

    public function defineVoltagem(int $voltagem)
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        echo "Nome do produto: " . $this->titulo;
        echo " voltagem: " . $this->voltagem;
    }
}