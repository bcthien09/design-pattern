<?php
/**
 * Created by PhpStorm.
 * User: thienbui
 * Date: 9/5/18
 * Time: 6:45 PM
 */
//
//interface FactoryInterface
//{
//    public function getProductName();
//}
//
//class Factory implements FactoryInterface
//{
//
//    public function getProductName()
//    {
//        return 'OK Factory';
//    }
//}
//
//$production = new Factory();
//
//var_dump($production->getProductName());
class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' - ' . $this->vehicleModel;
    }
}

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

// have the factory create the Automobile object
$veyron = AutomobileFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
