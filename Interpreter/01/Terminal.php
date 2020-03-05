<?php
// terminal Expression
class Terminal implements Expression
{
    private $n;

    public function __construct($n)
    {
        $this->n = $n;
    }

    public function interpret()
    {
        return $this->n;
    }
}