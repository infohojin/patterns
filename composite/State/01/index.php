<?php

const OPEN = 0x01;      // 주문
const PAY = 0x02;       // 결제중
const ORDERED = 0x04;   // 주문완료

$state = NULL;

$state = OPEN;

if ($state == OPEN) {
    echo "주문\n";
} else if ($state == PAY) {
    echo "결제중\n";
} else if ($state == ORDERED) {
    echo "주문완료\n";
}