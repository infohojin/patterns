<?php

class Product
{
    protected $name;
    protected $price;
    protected $num;

    // Setter: 상품명 설정
    public function setName($name)
    {
        $this->name = $name;
    }

    // Getter : 상품명 확인
    public function getName()
    {
        return $this->name;
    }

    // Setter: 가격 설정
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Getter : 가격 확인
    public function getPrice()
    {
        return $this->price;
    }

    // Setter: 수량 설정
    public function setNum($num)
    {
        $this->num = $num;
    }

    // Getter : 수량 확인
    public function getNum()
    {
        return $this->num;
    }

    // 행위 추가동작
    public function getTax($tax=10)
    {
        return ( $this->price * $this->num ) * $tax/100;
    }

}
