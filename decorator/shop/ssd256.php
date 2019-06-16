<?php
// ConcreateDecorator
class ssd256 extends Decorate
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
        return $this->base->product().",ssd256";
    }
    
    // 가격정보
    public function price()
    {
        return $this->base->price() + 110000;
    }
}