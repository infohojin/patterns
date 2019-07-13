<?php
/**
 * 팩토리 클래스
 */
class Factory
{
    static public function getInstance($type=null)
    {
        echo "팩토리:인스턴스를 생성하여 반환합니다.\n";
        if($type == "ko") {
            return new Korean();
        } else if($type == "en") {
            return new English();
        }
        
    }
}
