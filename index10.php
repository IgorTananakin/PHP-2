<?php
trait Train1 {

    public function m() {
        echo "Вызван трейт 1";
    }
}

trait Train2 {

    public function m() {
        echo "Вызван трейт 2";
    }
}

class MyClass {
    use Train1,Train2 {
        Train1::m insteadof Train2;
        Train2::m as m1;
    }
}

$n = new MyClass;

$n->m();
$n->m1();
//insteadof используется для разрешения конфликта 
// as использует под другим именем

