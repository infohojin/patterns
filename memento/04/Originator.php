<?php
/**
 * 상태를 가지고 있는 객체입니다.
 */
class Originator extends Memento
{
    // 상태를 저장하기 위해서 변수를 하나 가지고 있습니다.
    protected $state;

    /**
     * 메멘토
     */
    // 메멘토의 객체를 생성하여 반환을 합니다.
    public function save()
    {
        echo "상태 저장.\n";
        $this->push($this->state);
    }

    // 복원합니다.
    public function restore()
    {
        echo "상태 복원. => ";
        $this->state = $this->pop();
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
        echo $state."를 설정합니다.->";
        $this->state = $state;
    }
}
