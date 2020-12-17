<?php

interface A
{
    public function foo();
    public function bar();
}

interface B
{
    public function foo();
    public function baz();

}


class D implements A,B
{
    public function baz()
    {
        
    }

    public function foo()
    {
        
    }

    public function bar()
    {
        
    }
}
$n = new D;
$n->baz();

//До версии PHP 5.3.9 класс не мог реализовать два интерфейса, содержащих одноименную функцию, 
//так как это влекло за собой неоднозначность.
//В более новых версиях PHP это допустимо, но только при условии, что одноименные методы в
// разных интерфейсах определены одинаково.