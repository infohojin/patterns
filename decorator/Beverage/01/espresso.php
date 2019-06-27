<?php

class Espresso extends AbsAdding
{
    public function getTotalPrices()
    {
        return parent::getTotalPrices()+50;
    }
}