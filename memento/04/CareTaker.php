<?php
require "Originator.php";
require "Memento.php";

// 객체를 생성합니다.
$obj = new Originator;

// 메멘토를 저장할 스텍 어레이를 생성을 합니다.
$mementoStack = array();

// 상태를 설정하고, 
// 메멘토 객체를 통하여 객체를 저장합니다.
echo "===객체작업===\n";
$obj->setState("객체 상태1");
$memento = $obj->createMemento();
array_push($mementoStack, $memento);

$obj->setState("객체 상태2");
$memento = $obj->createMemento();
array_push($mementoStack, $memento);

$obj->setState("객체 상태3");
$memento = $obj->createMemento();
array_push($mementoStack, $memento);


// 객체를 복원합니다.
echo "===복원작업===\n";
$memento = array_pop($mementoStack);
$obj->restoreMemento($memento);
echo "복원된 상태값은 =".$obj->getState()."\n";

$memento = array_pop($mementoStack);
$obj->restoreMemento($memento);
echo "복원된 상태값은 =".$obj->getState()."\n";

$memento = array_pop($mementoStack);
$obj->restoreMemento($memento);
echo "복원된 상태값은 =".$obj->getState()."\n";
