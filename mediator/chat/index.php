<?php

// require "Mediator.php";
// require "colleague.php";

require "ChatServer.php";
require "ChatUser.php";

echo "중재자(mediator) 패턴에 대해서 학습을 합니다.\n";

$mediator = new ChatServer;

$user1 = new ChatUser("james");
$user2 = new ChatUser("jiny");
$user3 = new ChatUser("eric");

echo "=== 중재자 채팅서버 결합===\n";
$user1->join($mediator);
$user2->join($mediator);
$user3->join($mediator);
//echo "<pre>";
//print_r( $mediator->listMembers() );
//echo "</pre>";
echo "\n";

// 중재자로 데이터를 전송합니다.
$user1->sendMsg("안녕하세요, 저는 james 입니다.");
echo "\n";

$user2->sendMsg("안녕하세요, 저는 jiny 입니다.");
echo "\n";

$user3->sendMsg("안녕하세요, 저는 eric 입니다.");
