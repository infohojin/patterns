<?php
// 계층 클래스 로딩
require "hello.php";
require "Greeting.php";

$obj = new Hello;
$size = strlen(serialize($obj));
echo "hello 객체크기 = ".$size."\n";

$obj = new Greeting;
$size = strlen(serialize($obj));
echo "Greeting 객체크기 = ".$size."\n";