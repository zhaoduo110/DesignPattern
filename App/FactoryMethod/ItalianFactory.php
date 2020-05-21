<?php


namespace App\FactoryMethod;

use mysql_xdevapi\Exception;

/**
 * 造的是意大利的车
 * Class ItalianFactory
 * @package App\FactoryMethod
 */
class ItalianFactory extends FactoryMethod
{

    /**
     * @param $type
     * @return mixed
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST:
                return new Porsche();
                break;
            default:
                throw new Exception($type.'is not a valid vehicle');
                break;
        }
    }
}
