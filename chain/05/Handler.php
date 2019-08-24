<?php

require_once "Chain.php";
require_once "Order.php";
require_once "Cancel.php";

class Handler
{
    public function event($event)
    {
        // 체인 설정
        $First = new Order;
        $First->setNext(new Cancel);

        return $First->execute($event);
    }
}

// 객체 생성
$obj = new Handler;

// 이벤트를 실행
echo $obj->event("cancel");
