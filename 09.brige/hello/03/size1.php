<?php
// 계층 클래스 로딩
require "hello.php";
require "Greeting.php";

$mem = memory_get_usage();

$obj = new Greeting;
$mem = memory_get_usage() - $mem;
echo "hello 객체크기 = ".$mem."\n";