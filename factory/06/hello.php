<?php
// 클래스 파일 선언
class Hello
{
    public function greeting()
    {
        // return "안녕하세요";
        
        // 새로운 객체를 생성합니다.
        // $ko = new Korean;
        $ko = self::factory();
        return $ko->text();
    }

    /**
     * 단순 팩토리
     */
    public static function factory()
    {
        return new Korean;
    }
}