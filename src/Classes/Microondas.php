<?php

namespace App\Classes;


class Microondas extends Eletrodomestico
{
    public int $potencia;

    public function definePotencia(int $potencia)
    {
        if ($potencia === 110 || $potencia === 220) {
            $this->potencia = $potencia;
        }
    }

    public function mostrar(): void
    {
        $this->detalhes();
        echo " Potencia: " . $this->potencia;
    }
}