<?php

require "hello.php";
require "Korean.php";
require "English.php";

$obj1 = new Korean;
echo $obj1->greeting()."\n";

$obj2 = new English;
echo $obj2->greeting()."\n";
