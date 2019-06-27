<?php

class AbsAdding implements IBeverage
{
    private $_base;

    public function __constrcut($base){
        $this->_base = $base;
    }

    public function getTotalPrice()
    {
        $this->_base->getTotalPrice();
    }
}