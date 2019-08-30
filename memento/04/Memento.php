<?php

class Memento
{
    // 상태저장 프로퍼티
    // 제한된 접속권한
    protected $stack=[];

    public function __construct()
    {

    }

    /**
     * 상태값을 저장 합니다.
     */
    protected function push($obj)
    {
        array_push($this->stack, $obj);
    }

    /**
     * 상태값을 읽어 옵니다.
     */
    protected function pop()
    {
        return array_pop($this->stack);
    }
}
