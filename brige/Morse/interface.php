<?php
/**
 * 모르스부호는 3개의 구성요소로 이루어 집니다.
 */
interface MorseCode 
{
    public function dot();
    public function dash();
    public function space();
}