<?php
/**
 * concreteMediator
 */
class Server extends Mediator
{
    public function __construct()
    {
        echo "중재자 생성이 되었습니다.\n";
        $this->Colleague = array();
    }    

    public function createColleague()
    {
        // 동료 객체 목록을 초기화 합니다.
    }

    /**
     * 중재 기능
     */
    public function mediate($data, $user)
    {
        echo ">> ".$user." 로 부터 서버 메시지를 받았습니다.\n";
  
        // 모든 colleague에게 전달받은 메시지를 통보합니다.
        foreach ($this->Colleague as $obj) {
            echo "<< ". $obj->userName() ." : ";
            $obj->message($data);
        }
    }
}
