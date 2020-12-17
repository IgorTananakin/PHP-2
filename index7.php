<?php

class MyClass{

    public function __debugInfo() {
        return [
             $this->e1,
             $this->e2,
             $this->e3,
             $this->e4,
             $this->e5,
            // 'e5' => $this->e5,
        ];
    }

    private $p1 =1;
    private $p2 =2;
    private $p3 =3;
    private $p4 =4;
    private $p5 =55;
    protected $q1 =1;
    protected $q2 =2;
    protected $q3 =3;
    protected $q4 =4;
    protected $q5 =555;
    public $e1 = 1;
    public $e2 = 2;
    public $e3 = 3;
    public $e4 = 4;
    public $e5 = 5;
}
$qq = new MyClass;
var_dump($qq);
//__debugInfo вызывается только через var_dump