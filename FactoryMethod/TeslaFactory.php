<?php

namespace FactoryMethod;

use FactoryMethod\Product\TeslaModeloX;
use FactoryMethod\Product\TeslaModeloS;
use FactoryMethod\Product\CarroProduct;


class TeslaFactory implements CarroFactory
{
    public function criarCarro(string $modeloCarro): CarroProduct
    {
        if($modeloCarro == 'modelo_x')
            return new TeslaModeloX();
        elseif($modeloCarro == 'modelo_s')
            return new TeslaModeloS();
        else
            throw new \Exception("Modelo de Carro '{$modeloCarro}' não existe no sistema");
    }
}