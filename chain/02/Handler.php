<?php
/**
 * 클래스 선언
 */
class Handler
{
    public function event($message)
    {
        if($message == "action01") {
            return "버튼동작 01 입니다.";
        } else 
        if ($message == "action02") {
            return "버튼동작 02 입니다.";
        } else 
        if ($message == "action03") {
            return "버튼동작 03 입니다.";
        }
    
        return "동작이 없습니다.";
    }
}

// 객체 생성
$obj = new Handler;

// 이벤트를 실행
echo $obj->event("action02");
