<?php

class CareTaker
{
    protected $stack;

    /**
     * 케어테이커 생성자
     */
    public function __construct()
    {
        // 스텍을 초기화 합니다.
        $this->stack = array();
    }

    /**
     * 스텍에 저장을 합니다.
     */
    public function push($origin)
    {
        // 원조본을 이용하여 메멘토의 인스턴스를 생성합니다.
        $memento = $origin->create();

        // 메멘토를 스택에 저장합니다.
        array_push($this->stack, $memento);
    }

    /**
     * 스텍에서 객체를 읽어 옵니다.
     */
    public function undo($origin)
    {
        // 스택에서 메멘토를 읽어 옵니다.
        $memento = array_pop($this->stack);
        
        // 멘멘토를 이용하여 원조본을 복원합니다.
        $origin->restore($memento);

        // 복원된 객체를 반환합니다.
        return $origin->getState();
    }
}