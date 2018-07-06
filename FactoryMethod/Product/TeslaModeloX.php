<?php

namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tesla Modelo X\n<br/>";
    }

    public function frear()
    {
        echo "Freando Tesla Modelo X\n<br/>";
    }

    public function trocarMarcha()
    {
        echo "Trocando Marcha Tesla Modelo X\n<br/>";
    }
}