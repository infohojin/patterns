<?php

include "sandwich.php";

echo "배고프다. 샌드위치를 만든다.\n";
$obj = new sandwich;
echo $obj->make();
