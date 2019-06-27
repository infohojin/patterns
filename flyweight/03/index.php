<?php

require "flyweight.php";
require "MorseE.php";
require "MorseG.php";
require "MorseL.php";
require "MorseO.php";

require "Factory.php";
$share = new Factory;

$name = "goooogllleee";
echo "원본이름 = ".$name."\n";

for ($i=0; $i<strlen($name); $i++) {
    echo $name[$i]."=> ";
    echo $share->getCode($name[$i])->code();
    echo "\n";
}