<?php

//Создать класс, задав одному из свойств объект от другого класса.
// Клонировать исходный класс.
//Сделать так, чтобы свойство нового класса содержало указатель на новый объект класса
// с копией исходных значений.

class A
{
   //public $a;

    public function __construct(B $b)
    {
        $this->a = $b;
    }
}

class B
{

}

class C extends A
{
    public $c;

    public function __construct(A &$a)
    {
        $this->c = &$a;
    }
}

$a = new A(new B);
$aa = clone $a;
$c = new C($a);

var_dump($c);
