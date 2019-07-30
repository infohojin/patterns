<?php

include "sandwich.php";
include "StrawberryBagel.php";

echo "배고프다.샌드위치를 만든다.\n";
$obj = new StrawberryBagel;
echo $obj->make();