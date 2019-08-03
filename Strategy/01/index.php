<?php
    // 인터페이스
    include "Weapon.php";
    
    // 무기구현
    include "Gun.php";
    include "Knife.php";
    
    // 패턴
    include "Strategy.php";
    include "Charactor.php";

    // 전략패턴 실행
    $obj = new Charactor;
    $obj->attack();

    // 무기교환
    $obj->setWeapon(new Knife);
    $obj->attack();

    // 무기교환
    $obj->setWeapon(new Gun);
    $obj->attack();
