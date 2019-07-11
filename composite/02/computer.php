<?php

class Computer
{
    public $Monitor;
    public $Disk;
    public $Memory;

    public $name = "구성";

    public function setMonitor($monitor)
    {
        $this->Monitor = $monitor;
    }

    public function setDisk($disk)
    {
        $this->Disk = $disk;
    }

    public function setMemory($momory)
    {
        $this->Memory = $momory;
    }
}