<?php

// 클래스 파일을 읽어 옵니다.
include "hello.php";
include "korean.php";

// 객체를 생성합니다.
$korean = new Korean;

// 의존성을 주입합니다.
$obj = new Hello($korean);

// 행위 호출
echo $obj->greeting();