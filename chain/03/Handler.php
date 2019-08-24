<?php

require_once "Order.php";
require_once "Cancel.php";

class Handler
{
    public function event($message)
    {
        if($message == "order") {
            return (new Order)->execute();
        } else 
        if ($message == "cancel") {
            return (new Cancel)->execute();
        } 
    
        return "동작이 없습니다.";
    }
}

// 객체 생성
$obj = new Handler;

// 이벤트를 실행
echo $obj->event("order");
