<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar()
    {
        echo "Acelerando Dodge Dart\n<br/>";
    }

    public function frear()
    {
        echo "Freando Dodge Dart\n<br/>";
    }

    public function trocarMarcha()
    {
        echo "Trocando Marcha Dodge Dart\n<br/>";
    }
}