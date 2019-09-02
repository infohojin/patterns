<?php

class ChatServer
{
    public function __construct()
    {
        echo __CLASS__." 객체가 생성이 되었습니다.\n";
        echo ">>>채팅 서버가 생성이 되었습니다.\n";
    }

    // 중재를 해야될 객체의 목록을 가지고 있습니다.
    // Colleague가 적용된.
    protected $_list = [];

    public function addColleague($colleague)
    {
        if ($colleague) {
            array_push($this->_list, $colleague);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function listMembers()
    {
        return $this->_list;
    }

    public function mediate($data, $user)
    {
        echo $user."로 부터 서버 메시지를 받았습니다 = <b>".$data."</b>\n";
  
        foreach ($this->_list as $obj) {
            echo ">>>메시지를 유저(". $obj->userName() .")들에게 전달합니다.\n";
            $obj->handle($data);
        }
    }
}
