<?php
/**
 * 기본 객체
 */
class Computer
{
    public $_cpu;
    public $_ram = [];
    public $_storage = [];

    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n";
    }

    public function __toString()
    {
        return 
        "이 컴퓨터의 사양은 CPU=". $this->_cpu. 
        ", RAM= ".$this->memory()."GB". 
        ", Storage= ".$this->storage()."GB". 
        "입니다.\n";
    }

    public function memory()
    {
        $size = 0;
        foreach ($this->_ram as $mem) {
            $size += $mem->getSize();
        }
        return $size;
    }

    public function storage()
    {
        $size = 0;
        foreach ($this->_storage as $disk) {
            $size += $disk->getSize();
        }
        return $size;
    }
}