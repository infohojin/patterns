<?php
/**
 * 공통된 부분
 */
abstract class SandWich
{
    // 템플릿
    public function make()
    {
        // 단계1 : 빵을 하나 준비합니다.
        $food = $this->bread();
        
        // 단계2 : 준비된 빵에 속재료를 놀려 놓습니다.
        $food .= " + ";
        $food .= $this->jam();
        
        // 단계3 : 속재료 위에 다시 빵하나를 놓습니다.
        $food .= " + ";
        $food .= $this->bread();

        // 생성된 샌드위치를 반환합니다.
        return $food;
    }

    // 추상메소드
    abstract protected function bread();
    abstract protected function jam();
}