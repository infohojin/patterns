<?php
require "computer.php";
require "monitor.php";
require "disk.php";
require "memory.php";

require "monitor32.php";

// Client
$obj = new Computer;
$obj->setMonitor(new Monitor);
$obj->Monitor->addMonitor(new Monitor32);
$obj->Monitor->addMonitor(new Monitor32);

$obj->setDisk(new Disk);
$obj->setMemory(new Memory);

echo $obj->name."\n";
echo $obj->Monitor->name."\n";
$obj->Monitor->show();

echo $obj->Disk->name."\n";
echo $obj->Memory->name."\n";