<?php
/**
 * 팩토리 추상화
 */
abstract class Factory
{
    public final function create()
    {
        // return new Product();
        // 하위 클래스로 위임
        return $this->createProduct();
    }

    // 추상 메소드 선언
    abstract public function createProduct();
}


