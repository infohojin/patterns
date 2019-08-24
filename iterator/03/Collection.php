<?php
/**
 * 컬렉션
 */
class Collection implements Aggregate
{
    // 외부의 직접수정을 방지합니다.
    private $objs = [];
    private $last = 0;

    /**
     * 집합에서 하나의 객체를 반환합니다.
     */
    public function getObj($id)
    {
        return $this->objs[$id];
    }

    /**
     * 전체 객체의 갯수를 반환합니다.
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * 새로운 객체를 추가합니다.
     */
    public function append($obj)
    {
        array_push($this->objs, $obj);
        $this->last++;
    }

    /**
     * 인터페이스 구현
     */
    public function iterator()
    {
        // 이터레이터 객체를 생성합니다.
        return new IteratorObject($this);
    }
}