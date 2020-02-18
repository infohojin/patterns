<?php

class Proxy implements Subject
{
    private $_object;

    public function __construct($real)
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n\n";
        $this->_object = $real;
    }

    public function action1()
    {
        echo __METHOD__."를 호출합니다.\n";
        $this->_object->action1();
    }

    public function action2()
    {
        echo __METHOD__."를 호출합니다.\n";
        $this->_object->action2();
    }
}