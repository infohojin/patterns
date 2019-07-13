<?php

// 클래스 파일을 읽어 옵니다.
include "hello.php";

// 객체를 생성합니다.
$obj = new Hello;

// 행위 호출
echo $obj->greeting();