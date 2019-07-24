<?php

class Config
{
    protected static $Instance = NULL;

    protected function __construct()
    {
        echo __CLASS__."가 생성이 되었습니다.\n";
    }

    protected function __clone()
    {
        echo __CLASS__."가 복제 되었습니다.\n";
    }

}