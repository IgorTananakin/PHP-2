<?php
class BaseClass{
    public function ww(){
        echo " метод ww";
    }
}
class MyClass{

    public function __construct(){
        $this->w= new BaseClass;
        // if (!$this->w instanceof qq) {
        //  echo "Объект не создан";
        // }
    }
    public function qq(){
        $this->w->ww();
    }
}
$q = new MyClass;
$q->qq();
//instanceof проверяет создан ли объект