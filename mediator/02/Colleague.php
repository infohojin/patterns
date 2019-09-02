<?php

abstract class Colleague
{
    protected $Mediator;

    /**
     * 중개 객체를 설정합니다.
     * concreteMediator에 의해서 호출됩니다.
     */
    public function setMediator($mediator)
    {
        $this->Mediator = $mediator;
    }

}