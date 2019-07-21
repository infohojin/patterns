<?php
/**
 * 추상클래스 적용 
 * 한국 규격 타이어
 */
class KoreaTireProduct extends TireProduct
{
    public function __construct()
    {
        echo "Product =".__CLASS__."객체를 생성합니다.\n";
    }

    public function makeAssemble()
    {
        echo "메소드 호출 ".__METHOD__."\n";
        echo "한국형 타이어 장착\n";
    }
}
