<?php

require_once "Fruit.php";

$fruit = [
    new Fruit("Apple"),
    new Fruit("Banana"),
    new Fruit("Berry"),
    new Fruit("Grape")
];

for ($i=0; $i<count($fruit);$i++) {
    echo $fruit[$i]->getName()."\n";
}