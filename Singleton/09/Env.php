<?php

class Env extends Config
{
    public function setting()
    {
        echo "시스템 환경 설정을 합니다.\n";
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