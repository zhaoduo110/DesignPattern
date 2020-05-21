<?php


namespace App\FactoryMethod;


class Porsche implements VehicleInterface
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