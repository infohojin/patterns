<?php
/**
 * 알고리즘의 공통된 동작을 위하여 추상클래스를 선언합니다.
 * 각 알고리즘으로 재정의되는 추상 메소드를 선언합니다.
 */
abstract class Algorism
{
    /**
     * 빌더 인스턴스를 저장합니다.
     */
    protected $Composite;

    abstract public function setCpu($cpu);
    abstract public function setRam($size);
    abstract public function setStorage($size);

    public function getInstance()
    {
        return $this->Composite;
    }
}
