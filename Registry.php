<?php
/**
 * Created by PhpStorm.
 * User: thienbui
 * Date: 9/5/18
 * Time: 5:53 PM
 * Mission Save all variable global to easy manage
 */

class Registry
{
    protected static $config = [];

    public function __construct() {}

    public static function set($key, $value)
    {
        self::$config[$key] = $value;
    }

    public static function get($key)
    {
        return self::$config[$key] ? self::$config[$key] : null;
    }

    final static public function removeObject($key)
    {
        if (array_key_exists($key, self::$config))
        {
            unset(self::$config[$key]);
        }
    }
}

$registry = new Registry();

Registry::set('key', 'I love Pattern');
Registry::set('key1', 'I love Pattern1');

var_dump(Registry::get('key'));
var_dump(Registry::removeObject('key'));
