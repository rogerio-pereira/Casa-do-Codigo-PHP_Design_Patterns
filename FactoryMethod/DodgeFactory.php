<?php

namespace FactoryMethod;

use FactoryMethod\Product\CarroProduct;
use FactoryMethod\Product\DodgeCharger;
use FactoryMethod\Product\DodgeDart;


class DodgeFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if($modeloCarro == 'charger')
            return new DodgeCharger();
        elseif($modeloCarro == 'dart')
            return new DodgeDart();
        else
            throw new \Exception("Modelo de Carro '{$modeloCarro}' não existe no sistema");
    }
}