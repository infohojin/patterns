<?php
require "Memento.php";
require "Originator.php";


// 객체를 생성합니다.
$obj = new Originator;

$obj->setState("상태1");
$obj->save();

$obj->setState("상태2");
$obj->save();

$obj->setState("상태3");
$obj->save();

$obj->restore();
echo "상태값 =".$obj->getState()."\n";

$obj->restore();
echo "상태값 =".$obj->getState()."\n";

$obj->restore();
echo "상태값 =".$obj->getState()."\n";