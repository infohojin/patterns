<?php

require "hello.php";

$names = ['james', 'eric', 'hojin'];

foreach ($names as $name) {
    $obj = new hello($name);
    echo $obj->greeting()."\n";
}