<?php
/**
 * 한국공장 팩토리
 */
class KoreaFactory extends Factory
{
    public function __construct()
    {
        echo __CLASS__."객체를 생성합니다.\n";
    }

    public function createTire()
    {
        return new KoreaTireProduct;
    }

    public function createDoor()
    {
        return new KoreaDoorProduct;
    }
}
