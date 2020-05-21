<?php


namespace App\FactoryMethod;

/**
 * 建造车辆的接口
 * Interface VehicleInterface
 * @package App\FactoryMethod
 */
interface VehicleInterface
{
    /**
     * @param $color
     * @return mixed
     */
    public function serColor($color);

}