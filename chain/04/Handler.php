<?php

require_once "Order.php";
require_once "Cancel.php";

class Handler
{
    public function event($event)
    {
        if ( $message = (new Order)->execute($event) ) {
            return $message;
        }

        if ( $message = (new Cancel)->execute($event) ) {
            return $message;
        } 
    
        return "동작이 없습니다.";
    }
}

// 객체 생성
$obj = new Handler;

// 이벤트를 실행
echo $obj->event("cancel");
