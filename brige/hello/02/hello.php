<?php
// 최초 설계 인사말
class Hello
{
    public function greeting($lang)
    {
        if ($lang == "Korean") {
            return "안녕하세요";
        } else {
            return "Hello";
        }
    }
}