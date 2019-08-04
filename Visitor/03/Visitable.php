<?php
/**
 * 방문을 받아 들이는 인터페이스
 */
interface Visitable
{
    public function accept($visitor);
}
