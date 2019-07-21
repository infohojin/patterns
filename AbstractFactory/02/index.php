<?php

// 생성될 객체의 제품군을 정의
require "CarProduct.php";
require "SedanProduct.php";
require "BusProduct.php";

// 팩토리 매소드 패턴 정의
require "Factory.php";
require "MakeFactory.php";

echo "팩토리 메소드 패턴을 실습합니다.\n";

// 팩토리 매소드 패턴의 객체를 생성합니다.
// 팩토릴 메소드 객체는 서브클래스로 주상클래스 Factory를 적용 
$factory = new MakeFactory;

// 세단 자동차의 클래스 객체생성을 위임합니다.
$product = $factory->createProduct("Sedan");
if (is_object($product)) {
    $product->makeAssemble();
}

// 버스 자동차의 클래스 객체생성을 위임합니다.
$product = $factory->createProduct("Bus");
if (is_object($product)) {
    $product->makeAssemble();
}

// 트럭 자동차의 클래스 객체생성을 위임합니다.
$product = $factory->createProduct("Truck");
if (is_object($product)) {
    $product->makeAssemble();
}
