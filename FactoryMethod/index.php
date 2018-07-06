<?php

require_once('../autoloader.php');

$teslaFactory = new \FactoryMethod\TeslaFactory();
$dodgeFactory = new \FactoryMethod\DodgeFactory();

try {
    $teslaModeloS = $teslaFactory->criarCarro('modelo_s');
    $teslaModeloX = $teslaFactory->criarCarro('modelo_x');

    $dodgeCharger = $dodgeFactory->criarCarro('charger');
    $dodgeDart = $dodgeFactory->criarCarro('dart');

    //Testando métodos
    $teslaModeloS->acelerar();
    $teslaModeloS->frear();
    $teslaModeloS->trocarMarcha();
    echo "\n<br/>";
    
    $teslaModeloX->acelerar();
    $teslaModeloX->frear();
    $teslaModeloX->trocarMarcha();
    echo "\n<br/>";
    
    $dodgeCharger->acelerar();
    $dodgeCharger->frear();
    $dodgeCharger->trocarMarcha();
    echo "\n<br/>";
    
    $dodgeDart->acelerar();
    $dodgeDart->frear();
    $dodgeDart->trocarMarcha();
    echo "\n<br/>";

    
} catch (Exception $e)
{
    echo $e->getMessage();
}