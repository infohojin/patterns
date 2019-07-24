<?php
/**
 * 정적 클래스
 */
class Config
{
    static public $conf = NULL;

    public static function set($val)
    {
        self::$conf = $val;
    }

    public static function get()
    {
        return self::$conf;
    }
}

Config::set("hello");
echo Config::get();
