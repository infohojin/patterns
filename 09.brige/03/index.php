<?php
// 계층 클래스 로딩
require "hello.php";
require "Greeting.php";

$obj = new Greeting;

echo $obj->ko()."\n";
echo $obj->greeting()."\n";

