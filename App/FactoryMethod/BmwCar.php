<?php


namespace App\FactoryMethod;


class BmwCar extends Car
{

    public function setAutoLogos()
    {
        return '宝马车标';
    }
}