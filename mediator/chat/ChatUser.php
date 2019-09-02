<?php

class ChatUser
{
    public function __construct($name)
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n";
        echo "... $name 유저가 생성이 되었습니다.\n";

        $this->_name = $name;
    }

    // 자신이 속해있는 중재자(mediator)를 저장합니다.
    protected $_mediator;

    protected $_name;

    public function join($mediator)
    {
        echo $this->_name."님이 채팅서버에 접속하셨습니다. <br>";
        // 자신이 속해 있는 메이에이터를 저장합니다.
        $this->_mediator = $mediator;

        // 메디에이터에 자신을 등록합니다.
        // 성공 여부를 반환합니다.
        return $mediator->addColleague($this);
    }

    public function sendMsg($data)
    {
        // 메이에이트 채팅서버에 접속되어 있는 경우
        // 서버로 메시지를 전송합니다.
        if ($this->_mediator != NULL) {
            $this->_mediator->mediate($data, $this->_name);
        }
        
    }

    public function userName()
    {
        return $this->_name;
    }

    public function handle($data)
    {
        echo ">>>...메세지 = ".$data."\n";
    }
}
