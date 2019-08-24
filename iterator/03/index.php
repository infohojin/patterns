<?php

require_once "Aggregate.php";
require_once "Collection.php";

require_once "PloyIterator.php";
require_once "IteratorObject.php";

require_once "Fruit.php";


// 집합 생성 및 요소추가
$menu = new Collection;
$menu->append( new Fruit("Apple") );
$menu->append( new Fruit("Banana") );
$menu->append( new Fruit("Berry") );
$menu->append( new Fruit("Grape") );


$loop = $menu->iterator();
while ($loop->isNext())
{
    $item = $loop->next();
    echo $item->getName()."\n";
}
