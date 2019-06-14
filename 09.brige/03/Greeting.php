<?php
// 최초 인사말을 상속 받습니다.
// 새로운 인사말 기능을 추가합니다.
class Greeting extends Hello
{
    public function ko()
    {
        return "안녕하세요";
    }
}