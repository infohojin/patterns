<?php
/**
 * 방문 조사
 */
class Visitant implements Visitor
{
    // 상태값
    private $total;
    private $num;

    public function __construct()
    {
        echo "주문을 처리합니다.\n";
        $this->total = 0;
        $this->num = 0;
    }

    // 원소 객체를 전달 받습니다.
    public function order($visitable)
    {
        echo "==상품내역==\n";
        
        // 방문자를 확인을 합니다.
        if ($visitable instanceof Cart) {
            $msg = "상품명=".$visitable->getName();

            $msg .= ", 수량=".$visitable->getNum();
            
            $total = $visitable->getPrice() * $visitable->getNum();
            $msg .= ", 가격=".$total." 입니다.\n";

            $this->total += $total;
            $msg .= "합계=".$this->total;
            
            // 주문건수 증가
            $this->num++;

            return $msg;
        }
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getNum()
    {
        return $this->num;
    }
}
