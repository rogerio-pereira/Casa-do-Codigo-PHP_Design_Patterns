<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Charger\n<br/>";
    }

    public function frear()
    {
        echo "Freando Dodge Charger\n<br/>";
    }

    public function trocarMarcha()
    {
        echo "Trocando Marcha Dodge Charger\n<br/>";
    }
}