<?php
/**
 * Created by PhpStorm.
 * User: thienbui
 * Date: 9/5/18
 * Time: 5:37 PM
 */

abstract class Multiton
{
    protected static $instances = [];

    public function __construct()
    {
    }

}
