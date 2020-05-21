<?php


namespace App\FactoryMethod;


class Bicycle implements VehicleInterface
{

    protected $color;

    /**
     * @param $color
     * @return mixed
     */
    public function serColor($color)
    {
        $this->color=$color;
    }
}