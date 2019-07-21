<?php
/**
 * 추상클래스 적용 
 * 미국 규격 도어
 */
class StateDoorProduct extends DoorProduct
{
    public function __construct()
    {
        echo "Product =".__CLASS__."객체를 생성합니다.\n";
    }

    public function makeAssemble()
    {
        echo "메소드 호출 ".__METHOD__."\n";
        echo "미국형 도어장착\n";
    }
}
