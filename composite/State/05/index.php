<?php

class JinyOrder
{
    const OPEN = 0x01;      // 주문
    const PAY = 0x02;       // 결제중
    const ORDERED = 0x04;   // 주문완료
    const FINISH = 0x08;    // 처리완료

    public function process($state)
    {
        switch ($state) {
            case "OPEN":
                $this->stateOrder();
                break;
            case "PAY":
                $this->statePAY();
                break;
            case "ORDERED":
                $this->stateORDERED();
                break;
            case "FINISH":
                $this->stateFINISH();
                break;
        }
    }

}

$obj = new JinyOrder();
$obj->process("FINISH");


