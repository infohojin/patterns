<?php
class Order extends Chain
{
    public function execute($event)
    {
        if ($event == "order") {
            return "주문을 처리합니다.";
        }

        return $this->Next->execute($event);
    }
}
