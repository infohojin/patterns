<?php
/**
 * 팩토리(Factory)
 */
require "factory.php";
require "LgProduct.php";
require "SamsungProduct.php";
require "ProductFactory.php";

$fac = new ProductFactory;
$pro = $fac->create("LG");
$pro->name();

echo "\n";

$pro = $fac->create("SAMSUNG");
$pro->name();