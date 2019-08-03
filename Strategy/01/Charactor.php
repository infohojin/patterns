<?php
/**
 * 객체를 딜리게이트 처리하여 호출합니다.
 */
class Charactor extends Stategy
{
    public function attack()
    {
        if ($this->delegate == NULL) {
            // 무기가 선택되지 않은 경우
            echo "맨손 공격합니다.\n";
        } else {
            // 델리게이트
            $this->delegate->attack();
        }        
    }
}
