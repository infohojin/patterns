<?php

class StatePAY implements State
{
    public function process()
    {
        echo "결제중\n";
    }
}