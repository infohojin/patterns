<?php
// 클래스 파일 선언
class Hello
{
    // 객체 저장소
    private $korean;

    public function __construct($obj)
    {
        $this->korean = $obj;
    }

    public function greeting()
    {
        // return "안녕하세요";
        // 복합 객체를 호출합니다.
        return $this->korean->text();
    }
}