<?php

class Config
{
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
        echo __CLASS__."인스턴스를 생성합니다.\n";
        return new self();
    }

}



