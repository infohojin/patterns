<?php

require "hello.php";

// 첫번째 인사말
$obj = new Hello("안녕하세요.");
echo $obj->getMessage()."\n";

// 상태변경
// 두번째 인사말
$obj->setMessage("Hello nice meet you.");
echo $obj->getMessage()."\n";

