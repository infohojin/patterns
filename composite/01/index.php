<?php
require "computer.php";
require "monitor.php";

// Client
$obj = new Computer;
$obj->setMonitor(new Monitor);

echo $obj->name."\n";
echo $obj->Monitor->name."\n";