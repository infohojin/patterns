<?php

require "LightState.php";
require "LightLamp.php";

$obj = new LightLamp;
echo $obj->lightOn()->LightState()."\n";
echo $obj->lightOff()->LightState()."\n";

echo $obj->lightOn()->LightState()."\n";
echo $obj->lightOn()->LightState()."\n";
