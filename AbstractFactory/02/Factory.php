<?php
/**
 * 팩토리 메서드 추상화 선언
 */
abstract class Factory
{
    abstract public function createProduct($type);
}
