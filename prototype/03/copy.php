<?php

include "hello.php";

// 객체를 생성합니다.
$obj = new Hello("안녕하세요");
echo "원본내용=". $obj->getMessage() ."\n";

// 객체를 복사합니다.
$obj2 = $obj;
$obj2->setMessage("Hello world");

// 원본 객체와 복제 객체의 메시지를 출력합니다<div class=""></div>
echo "obj =". $obj->getMessage() ."\n";
echo "obj2 =". $obj2->getMessage() ."\n";