<?php

require "Subject.php";
require "Proxy.php";
require "RealSubject.php";

require "ProxyFactory.php";

$factory = new ProxyFactory;
$proxy = $factory->getObject();

echo $proxy->action1();
echo $proxy->action2();

echo $proxy->action3();
echo $proxy->action4();

