<?php
/**
 * 기본 객체
 */
class Memory
{
    private $size;

    public function __construct($size=null)
    {
        if ($size) {
            $this->size = $size;
        }
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}