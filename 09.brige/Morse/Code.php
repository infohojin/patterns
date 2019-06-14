<?php
/**
 * 모르스부호에 대해서 구성을 합니다.
 */
class Code implements MorseCode
{
    /**
     * 닷
     */
    public function dot()
    {
        echo "*";
        return $this;
    }

    /**
     * 가로 데쉬
     */
    public function dash()
    {
        echo "-";
        return $this;
    }

    /**
     * 스페이스
     */
    public function space()
    {
        echo " ";
        return $this;
    }

}