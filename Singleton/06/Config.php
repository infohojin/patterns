<?php

class Config
{
    private static $Instance = NULL;

    private function __construct()
    {
        echo __CLASS__."가 생성이 되었습니다.\n";
    }

    private function __clone()
    {
        echo __CLASS__."가 복제 되었습니다.\n";
    }

    public static function getInstance()
    {
        if (!isset(self::$Instance)) {
            echo __CLASS__."인스턴스를 생성합니다.\n";
            self::$Instance = new self();
        }

        echo __CLASS__."인스턴스를 반환합니다.\n";
        return self::$Instance;
    }

}