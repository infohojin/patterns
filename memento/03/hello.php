<?php

class Hello
{
    private $message;

    public function __construct($msg)
    {
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