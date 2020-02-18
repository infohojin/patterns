<?php

require "Subject.php";
require "Proxy.php";
require "RealSubject.php";

const ACT1 = 0x01;
const ACT2 = 0x02;
$permit = ACT1;

$proxy = new Proxy($permit);
$proxy->action1();
$proxy->action1();

echo "Action1 실행횟수=".$proxy->_action1."\n";

