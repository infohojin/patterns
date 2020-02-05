<?php

class Car {

    // ① 클래스의 구성요소. 
    // 구성요소의 메소드는 호출해도 된다.
    private $engine; 


    public function __construct($eng)
    { 
        $this->engine = $eng;
    }

    public function start($key)
    { 

        // ③ 새로운 객체 생성. 
        // 내부에서 생성된 객체의 메소드는 호출해도 된다.
        $doors = new Doors(); 

        // ② 매개변수로 전달된 객체의 메소드는 호출해도 된다.
        $authorized = $key.turns(); 

        if ( $authorized ) { 

            // ① 객체의 구성요소의 메소드는 호출해도 된다.
            $engine->start(); 

            // ④ 객체 내에 있는 메소드는 호출해도 된다.
            $this->updateDashboardDisplay(); 

            // ③ 직접 생성하거나 인스턴스를 만든 객체의 메소드는 호출해도 된다.
            $doors->lock(); 

        }

    }

    public function updateDashboardDisplay() 
    { 
        // 생략
    }

}