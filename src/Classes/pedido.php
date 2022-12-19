<?php

namespace App\Classes;

use App\Classes\Cliente;
use App\Classes\Produto;

class Pedido
{
    private Cliente $cli;
    private Produto $prod;

    public function __construct(Cliente $cliente, Produto $produto)
    {
        $this->cli = $cliente;
        $this->prod = $produto;
    }

    public function getProduto(): Produto
    {
        return $this->prod;
    }    
}