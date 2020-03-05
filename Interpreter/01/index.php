<?php
require "Expression.php";
require "Context.php";
require "Terminal.php";
require "Add.php";

$lex = "{{ 1 1 + }}"; // postfix 어휘
$context = new Context($lex);

if( $token = $context->isStart()) {
    echo "연산해석 시작\n";
    $stack = []; // 스택
    while(true){
        $token = $context->next();
        if($token == "}}") {
            echo "구문연산 종료\n";
            break;
        } if(is_numeric($token)) {
            echo $token." 스택저장\n";
            array_push($stack, new Terminal($token)); 
        } else if($token == "+") {
            echo "+ 연산 ";

            // 두개의 피연산자를 스텍에서 읽음
            $left = array_pop($stack);
            $right = array_pop($stack);

            // non-terminal 연산을 수행합니다.
            $add = new Add($left, $right);
            $value = $add->interpret();
            echo "= ".$value."\n";
            //결과를 다시 스택에 저장합니다.
            array_push($stack, new Terminal($value)); 
        }
    }

} else {
    echo "판별할 수 없는 해석입니다.";
}

echo "최종결과 = ".array_pop($stack)->interpret();