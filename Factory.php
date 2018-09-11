<?php
/**
 * Created by PhpStorm.
 * User: thienbui
 * Date: 9/5/18
 * Time: 6:45 PM
 */

interface FactoryInterface
{
    public function getProductName();
}

class Factory implements FactoryInterface
{

    public function getProductName()
    {
        return 'OK ';
    }
}

$production = new Factory();

var_dump($production->getProductName());



class FactoryA {

}

class FactoryC {

}
class FactoryB {

}
