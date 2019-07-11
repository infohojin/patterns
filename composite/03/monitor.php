<?php

class Monitor
{
    public $screen = [];
    public $name = "모니터";

    public function addMonitor($monitor)
    {
        array_push($this->screen, $monitor);
    }

    public function show()
    {
        foreach ($this->screen as $part) {
            echo ">>". $part->name ."\n";
        }
    }

}