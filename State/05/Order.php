<?php


class JinyOrder
{
    private $state;

    /**
     * 객체 초기화
     */
    public function __construct()
    {
        // 각 상태의 서브클래스 객체의 인스턴스를 생성합니다.
        $this->state = [
            'ORDER'=>new StateOrder(),
            'PAY'=>new StatePay(),
            'ORDERED'=>new StateOrdered(),
            'FINISH'=>new StateFinish()
        ];
    }

    /**
     * 상태의 서브클래스를 호출합니다.
     */
    public function process($status)
    {
        $this->state[$status]->process();
    }

}

