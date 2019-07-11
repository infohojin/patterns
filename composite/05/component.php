<?php

abstract class Compoment
{
    /**
     * 이름을 저장합니다.
     */
    private $name;

    /**
     * 이름에 대한 getter 입니다.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 이름에 대한 setter 입니다.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}