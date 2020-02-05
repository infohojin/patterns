<?php
require "package1.php";
require "package2.php";
require "package3.php";

require "facade.php";
/*
기존에 페키지를 직접 접근하여 사용
*/

$obj1 = new Package1;
$obj1->process();

$obj2 = new Package2;
$obj2->process();

$obj3 = new Package3;
$obj3->process();


