<?php

require "Subject.php";
require "Proxy.php";
require "RealSubject.php";

$real = new RealSubject;
$proxy = new Proxy($real);
$proxy->action1();
$proxy->action2();

$proxy->action3();
$proxy->action4();


