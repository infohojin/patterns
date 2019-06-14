<?php

// 선언부
require("Interface.php");

// 구현부
require("Code.php");
require("Beep.php"); 

// 브리지
require("morse.php");

echo "모르스코드를 출력합니다.\n";

function mPrint($msg, $type) {
    echo "String = ".$msg."\n";
    $m = new Morse($type);

    for($i=0; $i<strlen($msg); $i++){
        echo $m->{$msg[$i]}()."\n";
    }

    unset($m);
}

mPrint("JINYPHP", new Code);

mPrint("JINYPHP", new Beep);