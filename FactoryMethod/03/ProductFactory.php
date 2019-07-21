<?php
/**
 * 팩토리 메소드 구현부분
 */
class ProductFactory extends Factory
{
    public function __construct()
    {
        echo __CLASS__."를 생성합니다.\n";
    }

    public function createProduct()
    {
        return new LgProduct();
    }
}
