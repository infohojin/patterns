<?php

abstract class Stategy
{
    // 추상적인 접근점
    protected $delegate;

    // 무기 교환 패턴
    public function setWeapon(Weapon $weapon)
    {
        echo "== 무기를 교환합니다. ==\n";
        $this->delegate = $weapon;
    }

    abstract public function attack();
}
