<?php
/**
 * 모르스부호에 대해서 구성을 합니다.
 */
class Beep implements MorseCode
{
    /**
     * 닷
     */
    public function dot()
    {
        echo "삐";
        return $this;
    }

    /**
     * 가로 데쉬
     */
    public function dash()
    {
        echo "음";
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