<?php
require "computer.php";
require "monitor.php";
require "disk.php";
require "memory.php";

// Client
$obj = new Computer;
$obj->setMonitor(new Monitor);
$obj->setDisk(new Disk);
$obj->setMemory(new Memory);

echo $obj->name."\n";
echo $obj->Monitor->name."\n";
echo $obj->Disk->name."\n";
echo $obj->Memory->name."\n";