<?php

class Composite extends Component
{
    /**
     * 리스트를 담고 있는 배열
     */
    public $children = [];

    public function __construct($name)
    {
        //echo __CLASS__."가 생성이 되었습니다.<br>";
        $this->setName($name);
    }

    /**
     * 요소를 추가합니다.
     */
    public function addNode(component $folder)
    {
        $name = $folder->getName();
        $this->children[$name] = $folder;
    }

    /**
     * 요소를 제거합니다.
     */
    public function removeNode($component)
    {
        $name = $component->getName();
        unset($this->children[$name]);
    }

    /**
     * 노드 확인
     */
    public function isNode($component)
    {
        return $this->children;
    }

}
