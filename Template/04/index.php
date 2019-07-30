<?php

include "sandwich.php";
include "strawberry.php";

echo "배고프다.샌드위치를 만든다.\n";
$obj = new Strawberry;
echo $obj->make();