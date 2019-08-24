<?php

class Cart
{
    public function ordered()
    {
        echo "장바구니 상품을 성공적으로 주문이 접수 되었습니다.";
    }

    public function cancel()
    {
        echo "장바구니 상품 주문을 취소합니다.";
    }
}

$Cart = new Cart;

$conf = false;

if ($conf) {
    // 조건이 참인 경우 
    // 메시지를 전송합니다.
    $Cart->ordered();
} else {
    // 조건이 거짓인 경우
    // 메시지를 전송합니다.
    $Cart->cancel();
}

