<?php

class Produto
{
    public const NORMA = "1050";

    public string $titulo;
    public string $descricao = "Cerveja Brasileira";
    public float $preco;

    public function defineCodigoBarras(int $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(): void
    {
        echo "{$this->codigoBarras}";
        echo "<br>";
    }
}