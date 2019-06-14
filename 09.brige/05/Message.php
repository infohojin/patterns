<?php

class Message extends Language
{
    public function __construct($lang)
    {
        $this->language = $lang;
    }

    public function greeting()
    {
        return $this->language->greeting();
    }
}