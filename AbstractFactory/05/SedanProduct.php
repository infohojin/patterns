<?php
/**
 * 추상화 클래스를 상속받습니다.
 */
class SedanProduct extends CarProduct
{
    public function __construct()
    {
        echo __CLASS__."를 생성합니다.\n";
    }

    // 추상 클래스에서 선언한 매서드를 구현합니다.
    public function makeAssemble()
    {
        echo "세단 승용차를 생산합니다.\n";
    }
}
