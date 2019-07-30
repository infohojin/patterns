<?php
/**
 * 공통되지 않은 부분
 */
class Strawberry extends SandWich
{
    protected function bread()
    {
        return "식빵";
    }

    protected function jam()
    {
        return "딸기쨈";
    }
}