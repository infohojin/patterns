<?php
// 클래스 파일 선언
class Hello
{
    public function greeting()
    {
        // return "안녕하세요";
        // 새로운 객체를 생성합니다.
        $ko = new Korean;
        return $ko->text();
    }
}