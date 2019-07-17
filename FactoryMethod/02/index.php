<?php
/**
 * 팩토리(Factory)
 */
require "factory.php";
require "Gram.php";

$fac = new Factory;
$pro = $fac->create();
$pro->name();