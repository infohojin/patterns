<?php

require "Mediator.php";
require "Server.php";
require "colleague.php";
require "User.php";

$mediator = new Server;

// colleague 1 등록
$user1 = new User("james");
$user1->setMediator($mediator);
$mediator->addColleague($user1);

// colleague 2 등록
$user2 = new User("jiny");
$user2->setMediator($mediator);
$mediator->addColleague($user2);

// colleague 3 등록
$user3 = new User("eric");
$user3->setMediator($mediator);
$mediator->addColleague($user3);


// 중재자로 데이터를 전송합니다.
$user1->send("안녕하세요, 저는 james 입니다.");
echo "\n";

$user2->send("안녕하세요, 저는 jiny 입니다.");
echo "\n";

$user3->send("안녕하세요, 저는 eric 입니다.");