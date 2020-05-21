<?php

namespace App\FactoryMethod;

abstract class FactoryMethod
{

    const CHEAP = 1;
    const FAST = 2;

    /**
     * @param $type
     * @return mixed
     */
    abstract protected function createVehicle($type);


    /**
     * @param $type
     * @return mixed
     */
    public function create($type)
    {
        $obj = $this->createVehicle($type);
        $obj->setColor("#f00");
        return $obj;
    }

}