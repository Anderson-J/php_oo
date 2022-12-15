<?php

namespace App\Classes;


final class Microondas extends Eletrodomestico
{
    public string $descricao = "Microondas em geral";
    public int $potencia;

    public function __construct(string $titulo, int $voltagem, int $potencia)
    {
        parent::__construct($titulo);
        $this->defineVoltagem($voltagem);
        $this->definePotencia($potencia);
    }

    public function definePotencia(int $potencia)
    {
        $this->potencia = $potencia;
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br>Potencia: " . $this->potencia . "<br>";
    }
}