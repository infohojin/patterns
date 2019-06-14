<?php
// 계층
require "hello.php";
require "Korean.php";
require "English.php";

//계층
require "Language.php";
require "Message.php";

if(isset($language) && $language == "Korean") {
    $obj = new Message( new Korean );
} else {
    $obj = new Message( new English );
}

echo $obj->greeting();