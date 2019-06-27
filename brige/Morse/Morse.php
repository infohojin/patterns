<?php
/**
 * 모스 코드를 상속받이 처리합니다.
 */
class Morse
{
    private $_m;
    public function __construct($type)
    {
        // echo __CLASS__."를 생성합니다. \n";
        $this->_m = $type;
    }
     
    public function a()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function b()
    {
        $this->_m->dash()->space();        
        $this->_m->dot()->space();      
        $this->_m->dot()->space();      
        $this->_m->dot()->space();      
    }

    public function c()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function d()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
    }

    public function e()
    {
        $this->_m->dot()->space();
    }

    public function f()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function g()
    {
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function h()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();

    }

    public function i()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
    }

    public function j()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
    }

    public function k()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function l()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
    }

    public function m()
    {
        $this->_m->dash()->space();
        $this->_m->dash()->space();

    }

    public function n()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function o()
    {
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
    }

    public function p()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function q()
    {
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function r()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
    }

    public function s()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
    }

    public function t()
    {
        $this->_m->dash()->space();

    }

    public function u()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function v()
    {
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function w()
    {
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
    }

    public function x()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
    }

    public function y()
    {
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dash()->space();
        $this->_m->dash()->space();
    }

    public function z()
    {
        $this->_m->dash()->space();
        $this->_m->dash()->space();
        $this->_m->dot()->space();
        $this->_m->dot()->space();
    }
}