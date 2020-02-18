<?php
/**
 * 주체의 인터페이스를 선언합니다.
 */
interface Subject
{
    public function addObserver(Observer $o);
    public function delelteObserver(Observer $o);
    public function notiObserver();
}