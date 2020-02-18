<?php

$state = "ordered";
if($state && function_exists($state)){
    $state();
}

function open()
{
    echo "주문\n";
}

function pay()
{
    echo "결제중\n";
}

function ordered()
{
    echo "주문완료\n";
}

function finish()
{
    echo "처리완료\n";
}

