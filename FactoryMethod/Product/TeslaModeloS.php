<?php

namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Tesla Modelo S\n<br/>";
    }

    public function frear()
    {
        echo "Freando Tesla Modelo S\n<br/>";
    }

    public function trocarMarcha()
    {
        echo "Trocando Marcha Tesla Modelo S\n<br/>";
    }
}