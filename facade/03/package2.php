<?php
/**
 * 기능2 클래스를 선언합니다.
 */
class Package2
{
    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.<br>";
    }

    public function process()
    {
        echo "패키지2 작업을 진행합니다.<br>";
    }
}