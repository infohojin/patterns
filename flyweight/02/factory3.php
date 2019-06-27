<?php

class Hello
{
    private static $Instance;
    public static function instance()
    {
        // 객체의 생성을 처리
        if (isset(self::$Instance)) {
            echo "기존 객체를 반환합니다.\n";
            return self::$Instance;
        } else {
            echo "공유 객체를 생성합니다.\n";
            self::$Instance = new self();
            return self::$Instance;
        }
    }

    public function console($msg)
    {
        return $msg."\n";
    }

    public function browser($msg)
    {
        return $msg."<br/>";
    }
}


class Factory
{
    private $pool=[];

    public function make($name)
    {
        if(!isset($this->pool[$name]) ) {
            echo "팩토리 생성요정=";
            $this->pool[$name] = $name::instance();
            return $this->pool[$name];
        }

        echo "저장된 pool 객체 반환\n";
        return $this->pool[$name];

        
    }
}

// 팩토리 객체1
$factory = new Factory();
$hello1 = $factory->make("Hello");

// 팩토리 객체1
$hello2 = $factory->make("Hello");

if ($hello1 === $hello2) {
    echo "동일한 객체입니다.\n";
} else {
    echo "서로다른 객체입니다.\n";
}