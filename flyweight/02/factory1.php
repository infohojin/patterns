<?php

class Hello
{
    public function console($msg)
    {
        return $msg."\n";
    }

    public function browser($msg)
    {
        return $msg."<br/>";
    }
}


class Factory
{
    public function make()
    {
        // 객체의 생성을 처리
        echo "팩토리 생성요정.\n";
        return new Hello;
    }
}

// 팩토리 객체1
$hello1 = (new Factory())->make();

// 팩토리 객체1
$hello2 = (new Factory())->make();

if ($hello1 === $hello2) {
    echo "동일한 객체입니다.\n";
} else {
    echo "서로다른 객체입니다.\n";
}