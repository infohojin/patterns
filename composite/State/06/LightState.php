<?php
/**
 * 상태 인터페이스를 선언합니다.
 */
interface LightState
{
    public function lightOn();
    public function lightOff();
    public function lightState();
}