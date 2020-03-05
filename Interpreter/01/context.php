<?php

class Context
{
    private $token;

    public function __construct($text)
    {
        $this->token = explode(" ",$text);
        echo "토큰분리\n";
        print_r($this->token);
    }

    // 시작기호 판별
    public function isStart()
    {
        if(current($this->token) == "{{") {
            next($this->token);
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $token = current($this->token);
        next($this->token);
        return $token;
    }
}