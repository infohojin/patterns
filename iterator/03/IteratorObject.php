<?php
/**
 * 집합체: 이터레이터
 */
class IteratorObject implements PloyIterator
{
    private $Aggregate;
    private $index = 0;

    public function __construct($agg)
    {
        $this->Aggregate = $agg;
    }

    public function isNext()
    {
        if ($this->index >= $this->Aggregate->getLast()) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        $obj = $this->Aggregate->getObj($this->index);
        $this->index++;
        return $obj;
    }
}