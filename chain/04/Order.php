<?php
class Order
{
    public function execute($event)
    {
        if ($event == "order") {
            return "주문을 처리합니다.";
        }
    }
}
