<?php

class StateOrdered implements State
{
    public function process()
    {
        echo "주문완료\n";
    }
}