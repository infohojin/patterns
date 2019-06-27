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

class Korean
{
    private $hello;
    public function __construct($hello)
    {
        // 의존성 주입
        $this->hello = $hello;
    }

    public function hello()
    {
        return $this->hello->browser("안녕하세요");
    }
}

class English
{
    private $hello;
    public function __construct($hello)
    {
        // 의존성 주입
        $this->hello = $hello;
    }

    public function hello()
    {
        return $this->hello->browser("hello");
    } 
}

// 객체할당1
$hello = new Hello;

// 객체할당2
$ko = new Korean($hello);
echo $ko->hello();

// 객체할당3
$en = new English($hello);
echo $en->hello();

echo "\n메모리 사용량=".memory_get_usage();