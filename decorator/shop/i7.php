<?php
// ConcreateDecorator
class i7 extends Decorate
{
    public $base;
    public function __construct($concreate)
    {
        echo __CLASS__."가 생성이 되었습니다.\n";
        $this->base = $concreate;
    }

    // 상품정보
    public function product()
    {
        return $this->base->product().",i7";
    }
    
    // 가격정보
    public function price()
    {
        return $this->base->price() + 475000;
    }
}