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
        return "action1 은 기능이 변경되었습니다.\n";
    }

    public function action2()
    {
        echo __METHOD__."를 호출합니다.\n";
        if($msg = $this->_object->action2()) {
            return $msg;
        } else {
            return "실제 객체에서 문자열을 반환 받지 못하였습니다.";
        }
    }

    public function __call($method, $args)
    {
        if(method_exists($this->_object, $method)) {
            if($msg = $this->_object->$method($args)) {
                return $msg;
            } else {
                return "실제 객체에서 문자열을 반환 받지 못하였습니다.";
            }

        } else {
            print $method."는 실제 존재 하는 매소드가 아닙니다.\n";
            var_dump($args);
        } 
    }

}