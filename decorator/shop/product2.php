<?php

class product2 implements component
{
    // 상품정보
    public function product()
    {
        return "테스크탑";
    }
    
    public function price()
    {
        // 가격을 반환합니다.
        return 25000;
    }
}