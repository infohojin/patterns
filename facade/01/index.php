<?php

require "Thermometer.php";
require "Temperature.php";

$therm = new Thermometer();
$therm->temp = "60";

$temp = new Temperature($therm);
echo "현재의 온도 = ".$temp->getTemp();