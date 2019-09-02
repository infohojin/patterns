<?php

abstract class Mediator
{
    // 중재를 해야될 객체의 목록을 가지고 있습니다
    protected $Colleague = [];

    /**
     * Colleague를 추가합니다.
     */
    public function addColleague($obj)
    {
        array_push($this->Colleague, $obj);
    }

    // 동료을 생성합니다.
    abstract public function createColleague();

}