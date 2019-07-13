<?php

// 클래스 파일을 읽어 옵니다.
include "factory.php";
include "hello.php";
include "korean.php";
include "English.php";

// 객체를 생성합니다.
$obj = new hello;

// 행위 호출
echo $obj->greeting("en")."\n";
echo $obj->greeting("ko")."\n";