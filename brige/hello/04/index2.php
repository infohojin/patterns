<?php

require "hello.php";
require "Korean.php";
require "English.php";

require "Language.php";

$obj = new Language;

$obj->setEnglish(new English);
echo $obj->english->greeting()."\n";

$obj->setKorean(new Korean);
echo $obj->korean->greeting()."\n";