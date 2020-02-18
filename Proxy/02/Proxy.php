<?php
/**
 * 프록시 객체
 */
class Proxy implements Subject
{

    public function action1()
    {
        echo __METHOD__."를 호출합니다.\n";
        echo "프록시 action1 작업을 처리합니다.\n";
    }

    public function action2()
    {
        echo __METHOD__."를 호출합니다.\n";
        echo "프록시 action2 작업을 처리합니다.\n";
    }
}
