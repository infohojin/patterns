<?php

class Proxy implements Subject
{
    private $_object;
    private $_permit;

    public $_action1;

    public function __construct($permit)
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n";
        $this->_permit = $permit;
    }

    public function action1()
    {
        echo __METHOD__."를 호출합니다.\n";
        $this->_action1++;
        echo "action1 작업을 처리합니다.\n\n";
    }

    public function action2()
    {
        echo __METHOD__."를 호출합니다.\n";

        if($this->_permit & 0x02) {
            // 게으른 객체생성
            if(!$this->_object) $this->real();
            $this->_object->action2();
        } else {
            echo "action2 실행 권한이 없습니다.";
        }
    }

    private function real()
    {
        echo "실제 객체를 생성합니다.\n";
        $this->_object = new RealSubject;
    }
}

