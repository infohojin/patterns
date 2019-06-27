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

class Korean extends Hello
{
    public function hello()
    {
        return $this->console("안녕하세요");
    }
}

class English extends Hello
{
    public function hello()
    {
        return $this->console("hello");
    } 
}

$ko = new Korean;
echo $ko->hello();

$en = new English;
echo $en->hello();