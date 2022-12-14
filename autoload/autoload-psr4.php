<?php

function carregar(string $nomeCompleto)
{
    $namespaceRaiz = "App\\";
    $diretorioBase = __DIR__ . "/../src";

    $tamanhoNamespaceRaiz = strlen($namespaceRaiz);
    
    $namespaceRaizRecebido = substr($nomeCompleto, 0, $tamanhoNamespaceRaiz);

    if ($namespaceRaiz !== $namespaceRaizRecebido) {
        return;
    }

    $caminhoRelativo = substr($nomeCompleto, $tamanhoNamespaceRaiz);

    $caminhoArquivo = $diretorioBase . str_replace('\\', '/', $caminhoRelativo) . ".php";

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }

}

spl_autoload_register("carregar");