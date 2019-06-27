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

// Hello 객체 중복생성
$ko = new Korean(new Hello);
echo $ko->hello();

$en = new English(new Hello);
echo $en->hello();

echo "\n메모리 사용량=".memory_get_usage();