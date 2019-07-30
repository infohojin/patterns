<?php
/**
 * 공통되지 않은 부분
 */
class StrawberryBagel extends SandWich
{
    // 추상메소드 : 구현
    protected function bread()
    {
        return "베이글";
    }

    // 추상메소드 : 구현
    protected function jam()
    {
        return "딸기쨈";
    }
}