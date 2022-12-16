<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;
use App\Interfaces\Retornavel;

class Produto implements Imprimivel
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

    private function acessaCodigoBarras(): string
    {
        return "Código de barras do produto: " . $this->codigoBarras;
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
        echo $this->acessaCodigoBarras();
    }

    public function retornaDetalhes(): string
    {
        $saida = "<br>Nome do produto: " . $this->titulo . "<br>";
        $saida = $saida . "<br>Preço do produto: " . $this->preco . "<br>";
        $saida = $saida . "<br>Descrição do produto: " . $this->descricao . "<br>";
        return $saida;
    }
}