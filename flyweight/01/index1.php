<?php

class Hello
{
    public $msg;

    public function greeting()
    {
        return $this->msg;
    }
}

$obj = new Hello; // 객체 인스턴스화, 자원할당
$obj->msg = "hello world";
echo $obj->greeting();

