<?php
/**
 * 기능1 클래스를 선언합니다.
 */
class Package1
{
    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.<br>";
    }

    public function process()
    {
        echo "패키지1 작업을 진행합니다.<br>";
    }
}