<?php

// 주체(subject)
require "Subject.php";
require "Members.php";

// 옵저버 객체
require "Observer.php";
require "UserA.php";
require "UserB.php";

echo "옵저버 패턴을 실행합니다\n";

$subject = new Members;

// 옵저버블에 등록을 합니다.
$a = new UserA("Jiny");
$subject->addObserver($a);

$b = new UserB("Eric");
$subject->addObserver($b);

// 모든 옵저버에게 통지를 전송합니다.
$subject->notiObserver();

