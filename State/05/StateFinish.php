<?php

class StateFinish implements State
{
    public function process()
    {
        echo "처리완료\n";
    }
}