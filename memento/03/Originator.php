<?php
/**
 * 상태를 가지고 있는 객체입니다.
 */
class Originator 
{
    // 상태를 저장하기 위해서 변수를 하나 가지고 있습니다.
    public $state;

    /**
     * 메멘토
     */
    // 메멘토의 객체를 생성하여 반환을 합니다.
    public function create()
    {
        echo ">메멘토 객체를 생성합니다.\n";
        return new Memento($this->state);
    }

    // 복원합니다.
    public function restore($memento)
    {
        echo ">메멘토 객체로 복원합니다.\n";
        $this->state = clone $memento->getObject();
    }

    /**
     * 상태
     */
    // 상태를 읽어옵니다.
    public function getState()
    {
        return $this->state;
    }

    // 상태를 설정합니다.
    public function setState($state)
    {
        $this->state = $state;
    }
}
