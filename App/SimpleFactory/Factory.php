<?php


namespace App\SimpleFactory;


use App\SimpleFactory\Vehicle\Bicycle;
use App\SimpleFactory\Vehicle\Car;
use mysql_xdevapi\Exception;

class Factory
{

    const CAR = 1;
    const BICYCLE = 2;

    public static function create($carType)
    {
        switch ($carType){
            case 1:
                $obj = new Bicycle();
                break;
            case 2:
                $obj = new Car();
                break;
            default:
                throw new Exception('Unsupport');
                break;
        }
        return $obj;
    }



}