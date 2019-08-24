<?php

abstract class Chain
{
    protected $Next;
    public function setNext($obj)
    {
        $this->Next = $obj;
    }

    abstract function execute($event);
}
