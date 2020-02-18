<?php
/**
 * 구현체
 */
class UserA extends Observer
{
    public function __construct($name)
    {
        echo __CLASS__."객체를 생성합니다.\n";
        $this->name = $name;
    }

    public function update()
    {
        echo $this->name." 갱신 합니다.\n";
    }
}