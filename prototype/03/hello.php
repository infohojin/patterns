<?php

class Hello
{
    private $message;

    /**
     * 생성자
     */
    public function __construct($msg)
    {
        echo __CLASS__."를 생성합니다. = 생성자 로직 동작 \n";
        $this->message = $msg;
    }

    public function setMessage($msg)
    {
        $this->message = $msg;
    }

    public function getMessage()
    {
        return $this->message;
    }
}