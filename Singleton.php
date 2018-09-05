<?php

/**
 * Class Database Singleton
 * return $instance
 * Mission: Avoid create many Object on class Object, instead of that we use common a Object on the system
 */

class Singleton
{
    private static $instance;

    public $mix;

    public static function getInstance()
    {
        if (!isset(self::$instance))
            return self::$instance = new self();
        return self::$instance;
    }

    private function __construct()
    {

    }

    public function get($value)
    {
        echo $value;
    }
}

$single = Singleton::getInstance();
$single->mix = 'Thien';

var_dump($single->mix);
