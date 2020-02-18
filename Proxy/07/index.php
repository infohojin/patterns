<?php

require "Subject.php";
require "Proxy.php";
require "RealSubject.php";

$proxy = new Proxy();
$proxy->action1();
$proxy->action2();
