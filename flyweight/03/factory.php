<?php

class Factory
{
    private $pool=[];

    public function getCode($char)
    {
        if(!isset($this->pool[$char])) {
            $className = "Morse".strtoupper($char);
            $this->pool[$char] = new $className;
        } 

        return $this->pool[$char];
    }
}