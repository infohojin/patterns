<?php

$conf = [
    'name'=>"jiny",
    'version'=>"1.0"
];

class foo
{
    public function conf()
    {
        return $GLOBALS['conf'];
    }
}

$obj = new foo;
print_r($obj->conf());
