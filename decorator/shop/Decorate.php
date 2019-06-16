<?php

abstract class Decorate implements component
{
    // 상품정보
    abstract public function product();
    
    // 가격정보
    abstract public function price();
}