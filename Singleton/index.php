<?php

require_once('../autoloader.php');

use Singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();

$novaInstancia = LogsSingleton::obterInstancia();

if($instancia === $novaInstancia) {
    echo 'As instancias são exatamente as mesmas!';
}