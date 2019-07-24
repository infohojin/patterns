<?php

include "Config.php";
include "Env.php";

// 싱글턴 인스턴스를 생성합니다.
$obj = Env::getInstance();

// 확장된 메소드를 실행합니다.
$obj->setting();