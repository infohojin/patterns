<?php
/**
 * 메멘토
 */
class Memento
{
    // 객체를 저장합니다.
    protected $obj;

    /**
     * 원조본(Originator)에 의해서 생성됩니다.
     */
    public function __construct($obj)
    {
        // 객체를 저장합니다.
        $this->obj = clone $obj;
    }

    /**
     * 저장된 객체를 읽어 옵니다.
     */
    public function getObject()
    {
        return $this->obj;
    }
}
