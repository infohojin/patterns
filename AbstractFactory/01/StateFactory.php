<?php
/**
 * 미국공장 팩토리
 */
class StateFactory extends Factory
{
    public function __construct()
    {
        echo __CLASS__."객체를 생성합니다.\n";
    }
    
    public function createTire()
    {
        return new StateTireProduct;
    }

    public function createDoor()
    {
        return new StateDoorProduct;
    }
}
