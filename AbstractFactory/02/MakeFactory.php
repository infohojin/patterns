<?php
/**
 * 팩토리를 구현/상속받습니다.
 */
class MakeFactory extends Factory
{
    // 추상 클래스에서 선언한 매서드를 구현합니다.
    public function createProduct($product)
    {
        echo "팩토리 인스턴스를 생성하여 반환합니다.\n";
        switch($product){
            case 'Sedan':
                return new SedanProduct;
            case 'Bus':
                return new BusProduct; 
            default:
                echo "일치된 객체가 없습니다.";
                return NULL;
        }
    }
}
