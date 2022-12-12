<?php

class Produto
{
    public const NORMA = "1050";

    public $titulo;
    public $descricao = "Cerveja Brasileira";
    public $preco;

    public function defineCodigoBarras(int $codigo)
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(int $codigo)
    {
        echo "{$this->codigoBarras}";
        echo "<br>";
    }
}