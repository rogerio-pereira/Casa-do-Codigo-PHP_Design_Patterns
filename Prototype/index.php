<?php

require_once('../autoloader.php');

$compradores = [
    'Comprador 1',
    'Comprador 2',
    'Comprador 3'
];

$livroPhp = new \Prototype\LivroPhpPrototype();
$livroPhp->setTitulo('Titulo Livro 1');

$livros = [];

foreach($compradores as $comprador) {
    $livroComprador = clone $livroPhp;
    $livroComprador->setNomeTitular($comprador);

    $livros[] = $livroComprador;
}

print_r($livros);