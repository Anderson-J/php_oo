<?php

namespace App\Classes;

class Produto
{
    public const NORMA = "1050";

    private string $titulo;
    public string $descricao = "Produto em geral";
    private float $preco;
    private int $codigoBarras;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function defineCodigoBarras(int $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    private function acessaCodigoBarras(): void
    {
        echo "Código de barras do produto: " . $this->codigoBarras;
    }
    
    public function definePreco(float $preco): void
    {
        if ($preco > 0) {
            $this->preco = $preco;
        }
    }
    
    public function detalhes(): void
    {
        echo "<br>Nome do produto: " . $this->titulo . "<br>";
        echo "<br>Preço do produto: " . $this->preco . "<br>";
        echo "<br>Descrição do produto: " . $this->descricao . "<br>";
        $this->acessaCodigoBarras();
    }
}