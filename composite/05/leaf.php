<?php
/**
 * 컴포넌트 추상화를 적용
 */
class Leaf extends Component
{
    private $price;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
