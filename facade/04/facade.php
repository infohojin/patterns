<?php
/**
 * 패키지에 대한 파사드 패턴
 */
class Facade
{
    private $_package1;
    private $_package2;
    private $_package3;

    /**
     * 인스턴스를 생성합니다.
     */
    public function __construct()
    {
        $this->_package1 = new Package1;
        $this->_package2 = new Package2;
        $this->_package3 = new Package3;
    }

    /**
     * 패키지 동작 1,2,3 을 한번에 수행해야 되는
     * 복잡한 동작을 파사드 메서드로 생성합니다.
     */
    public function processAll()
    {
        $this->_package1->process();
        $this->_package2->process();
        $this->_package3->process();
    }

}