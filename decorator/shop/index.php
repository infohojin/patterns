<?php

require "Component.php";
require "product1.php";

require "Decorate.php";
require "i7.php";
require "ssd256.php";

$p = new product1;

$spec = new i7($p);
$spec = new ssd256($spec);

echo "스팩=".$spec->product()."\n";
echo "가격=".$spec->price()."\n";
