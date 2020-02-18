<?php
/**
 * 프록시 팩토리
 */
class ProxyFactory
{
    public function getObject()
    {
        $real = new RealSubject;
        return new Proxy($real);
    }
}