<?php

class SandWich
{
    public function make()
    {
        // 단계1 : 빵을 하나 준비합니다.
        $food = "빵";
        
        // 단계2 : 준비된 빵에 속재료를 놀려 놓습니다.
        $food .= " + ";
        $food .= "속재료";
        
        // 단계3 : 속재료 위에 다시 빵하나를 놓습니다.
        $food .= " + ";
        $food .= "빵";

        // 생성된 샌드위치를 반환합니다.
        return $food;
    }
}