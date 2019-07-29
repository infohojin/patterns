<?php

include "hello.php";

$ko = new Hello("안녕하세요");
$en = new Hello("hello world");

echo $ko->getMessage()."\n";
echo $en->getMessage()."\n";