<?php

namespace App\Classes;

use App\Classes\Produto;

class Eletrodomestico extends Produto
{
    public string $descricao = "Eletrodoméstico em geral";
    public int $voltagem;

    public function __construct(string $titulo)
    {
        parent::__construct($titulo);
    }

    final public function defineCodigoBarras(int $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    protected function defineVoltagem(int $voltagem)
    {
        if ($voltagem === 110 || $voltagem === 220) {
            $this->voltagem = $voltagem;
        }
    }

    public function detalhes(): void
    {
        parent::detalhes();
        echo "<br>voltagem: " . $this->voltagem;
    }
}