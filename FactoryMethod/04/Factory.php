<?php
/**
 * 팩토리 추상화
 */
abstract class Factory
{
    public final function create($model)
    {
        // return new LgProduct();
        // 하위 클래스로 위임
        return $this->createProduct($model);
    }

    // 추상 메소드 선언
    abstract public function createProduct($model);
}


