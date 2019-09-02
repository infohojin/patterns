<?php
/**
 * concreteColleague
 */
class User extends Colleague
{
    protected $name;

    public function __construct($name)
    {
        echo "colleague가 등제 되었습니다.\n";
        $this->name = $name;
    }

    /**
     * 사용자 이름을 확인합니다.
     */
    public function userName()
    {
        return $this->name;
    }

    /**
     * 메시지를 전달합니다.
     */
    public function send($data)
    {
        // 중개 서버로 메시지를 전송합니다.
        $this->Mediator->mediate($data, $this->name);
    }

    public function message($data)
    {
        echo "<< ".$data."\n";
    }
}
