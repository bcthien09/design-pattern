<?php

/**
 * Class Database Singleton
 * return $instance
 * Mission: Avoid create many Object on class Object, instead of that we use common a Object on the system
 * Limit accessibility of __constructor() and __clone()
 * Inheritance which will break also the singleton pattern – the inheritance. Someone can extend our Singleton class and override accessibility:
 * UNSERIALIZING
 * Trait avoid duplicating the same blocks of code in different classes
 */

class Singleton
{
    private static $instance;

    public $mix;

    private final function __construct() {}
    private final function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private final function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    public final static function getInstance()
    {
        if (!isset(self::$instance))
            return self::$instance = new self();
        return self::$instance;
    }

    public function get($value)
    {
        echo $value;
    }
}

class SingletonA extends Singleton
{
    public function __construct()
    {
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
//
//$single = Singleton::getInstance();
//$single->mix = 'Singleton';
//var_dump($single->mix);

//$singletonA = SingletonA::getInstance();
//$singletonB = new SingletonA();
//$singletonC = clone $singletonB;
//var_dump($singletonA);
//var_dump($singletonB);
//var_dump($singletonC);


$singleton = SingletonA::getInstance();
$serialized = serialize($singleton);
$secondInstance = unserialize($serialized);
//var_dump($serialized);
var_dump($secondInstance);
