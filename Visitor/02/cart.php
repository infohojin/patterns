<?php

class Cart extends Product
{
    public function __construct($name, $price, $num=1)
    {
        $this->name = $name;
        $this->price = $price;
        $this->num = $num;
    }

    public function getTax($tax=10)
    {
        return ( $this->price * $this->num ) * $tax/100;
    }

    public function list()
    {
        $order = $this->name;
        $order .= ", 수량=".$this->num;
        $order .= ", 가격=".$this->price * $this->num." 입니다.\n";
        return $order;
    }

}