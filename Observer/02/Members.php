<?php
/**
 * 실제적 주체구현
 */
class Members implements Subject
{
    // 옵저버 보관
    private $Objs = [];

    public function __construct()
    {
        echo __CLASS__." 실제 주체(concreteSubject)를 생성합니다.\n";
    }

    /**
     * 옵저버를 등록합니다.
     */
    public function addObserver(Observer $o)
    {
        echo "옵저버 객체를 추가합니다.\n";
        array_push($this->Objs, $o);
    }

    /**
     * 옵저버를 제거합니다.
     */
    public function delelteObserver(Observer $o)
    {
        for ($i=0; $i<count($this->Objs); $i++) {
            if ($this->Objs[$i]->name == $o->name) {
                unset($this->Objs[$i]);
            }
        }
    }
    
    /**
     * 모든 옵저버에게 통보를 합니다.
     */
    public function notiObserver()
    {
        foreach ($this->Objs as $obj) {
            echo "옵저버=> ";
            $obj->update();
        }
    }
}