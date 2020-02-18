<?php

require "State.php";
require "StateOrder.php";
require "StatePay.php";
require "StateOrdered.php";
require "StateFinish.php";

require "Order.php";

$obj = new JinyOrder();
$obj->process("ORDERED");