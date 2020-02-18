<?php

// 상태값
$status = false;

while (1) {
    // 상태값 모니터
    if($status) {
        hello();
        // 상태값이 `참`인경우 탈출
        break;
    }
}

function hello()
{
    echo "안녕하세요.";
}
