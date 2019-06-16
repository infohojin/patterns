<?php

class product1 implements component
{
    // 상품정보
    public function product()
    {
        return "노트북";
    }

    public function price()
    {
        // 가격을 반환합니다.
        return 20000;
    }
}