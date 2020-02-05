<?php
// 파사드
class Temperature
{
    public $station;

    public function __construct($station)
    {
        $this->station = $station;
    }

    public function getTemp(): float  
    {    
        // 객체의 연결을 단순화 합니다
        return $this->station->getTemperature();
    }
}