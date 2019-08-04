<?php

class Cart extends Product implements Visitable 
{
    public function __construct($name, $price, $num=1)
    {
        $this->name = $name;
        $this->price = $price;
        $this->num = $num;
    }

    // 인터페이스 구현
    public function accept($visitor)
    {
        // 방문자의 주문을 호출합니다.
        // 인자로 원소 객체 자신을 전달합니다.
        return $visitor->order($this);
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