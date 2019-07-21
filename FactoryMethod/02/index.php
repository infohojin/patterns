<?php
/**
 * 팩토리(Factory)
 */
require "factory.php";
require "LgProduct.php";

$fac = new Factory;
$pro = $fac->create();
$pro->name();