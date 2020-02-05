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
        // 인스턴스를 저장합니다.
        $thermometer = $this->getThermometer(); 
    
        // 인스턴스를 통하여 메소드를 실행합니다.
        return $thermometer->getTemperature();
    }

    // 불필요한 객체 호출(생성)
    private function getThermometer()
    {
        return $this->station;
    }
}