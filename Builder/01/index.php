<?php
require "Builder.php";
require "Factory.php";

require "Memory.php";
require "Storage.php";
require "computer.php";

require "Algorism.php";
require "ProductModel.php";

// 알고리즘을 생성합니다.
$algorism = new ProductModel;

// 빌더 객체
$factory = new Factory();
$factory->setAlgorism($algorism);

// 생성 요청
// 빌드 생성된 인스턴스를 전달 받습니다.
$computer = $factory->build()->getInstance();

// __toString() 매직 메서드를 이용합니다.
echo $computer;