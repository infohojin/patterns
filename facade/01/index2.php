<?php

require "Thermometer.php";
require "Temperature2.php";

$therm = new Thermometer();
$therm->temp = "65";

$temp = new Temperature($therm);
echo "현재의 온도 = ".$temp->getTemp();
