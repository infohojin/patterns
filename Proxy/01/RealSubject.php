<?php
/**
 * 실체 객체
 */
class RealSubject
{

    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n";
    }

    public function action1()
    {
        echo __METHOD__."를 호출합니다.\n";
        echo "실제 action1 작업을 처리합니다.\n\n";
    }

    public function action2()
    {
        echo __METHOD__."를 호출합니다.\n";
        echo "실제 action2 작업을 처리합니다.\n\n";
    }
}