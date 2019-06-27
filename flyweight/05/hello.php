<?php

class hello
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greeting()
    {
        return "hello ".$this->name;
    }
}