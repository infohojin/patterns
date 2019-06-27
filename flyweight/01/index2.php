<?php

class Korean
{
    public function hello()
    {
        return "안녕하세요 \n";
    }
}

class English
{
    public function hello()
    {
        return "hello \n";
    } 
}

$ko = new Korean;
echo $ko->hello();

$en = new English;
echo $en->hello();
