<?php

namespace App\Classes;

class Cliente
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function __construct(string $nome, string $telefone, string $idade) //Não podemos atribuir um tipo de retorno no construtor, pois do contrário ocorrerá um erro
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;
    }

    public function __destruct() //o destrutor não pode retornar nada
    {
        echo "O obj foi destruido";
    }

    public function comprar(): void
    {
        echo "O cliente {$this->nome} realizou uma compra";
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function __set(string $nomePropriedade, $valorPropriedade): void // utilizado para um controle mais rígido por adição de propriedades em tempo de execução
    {
        if ($nomePropriedade === 'cpf') {
            $this->cpf = str_replace('.', '', $valorPropriedade);
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade): string
    {
        echo "Passou aqui no __get <br>";
        return "<br>A propriedade não existe<br>";
    }

    public function __call(string $nomeMetodo, array $argumentosMetodo): void
    {
        if ($nomeMetodo === 'alterar') {
            $this->nome = $argumentosMetodo[0];
            $this->idade = $argumentosMetodo[1];
        }
    }

    public function __invoke(bool $status): void
    {
        $this->status = $status;
    }

    public function __sleep(): array
    {
        return ["nome", "idade"];
    }

    public function __wakeup(): void
    {
        $this->tipo = "serializado";
    }

    public function __tostring(): string
    {
        return $this->nome . ', ' . $this->idade;
    }
}