<?php

// 추상 팩토리 및 그룹정의
require "Factory.php";
require "KoreaFactory.php";
require "StateFactory.php";

// 호환성 정의
require "DoorProduct.php";
require "TireProduct.php";

// 한국상품 그룹
require "KoreaDoorProduct.php";
require "KoreaTireProduct.php";

// 미국상품 그룹
require "StateDoorProduct.php";
require "StateTireProduct.php";

echo "추상 팩토리 패턴을 실습합니다.\n";

// 한국공장
$korea = new KoreaFactory;

$ham = $korea->createTire();
$ham->makeAssemble();

$bread = $korea->createDoor();
$bread->makeAssemble();

echo "\n";

// 미국공장
$state = new StateFactory;

$ham = $state->createTire();
$ham->makeAssemble();

$bread = $state->createDoor();
$bread->makeAssemble();
