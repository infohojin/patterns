<?php
/**
 * 무기 인터페이스를 적용하여 객체의 실체 코드 구현을 작성합니다.
 */
class Gun implements Weapon
{
    public function attack()
    {
        print "총을 발포합니다.";
        echo "\n";
    }
}
