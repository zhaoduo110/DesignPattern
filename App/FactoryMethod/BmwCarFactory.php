<?php


namespace App\FactoryMethod;


class BmwCarFactory extends CarFactory
{

    public function create()
    {
        return new BmwCar();
    }
}