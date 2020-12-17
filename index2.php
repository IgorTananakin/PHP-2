<?php

abstract class Figure {

    protected $speed;
    protected $mileage;

    public function setTankVolume($speed)
    {
        $this->speed = $speed;
    }

    abstract public function square($a, $b, $c, $d);
    abstract public function perimeter($a, $b, $c, $d);
}

class Square extends Figure {

    abstract public function setTankVolume($speed, $e);

    public function square($a, $b, $c, $d)
    {
        
    }

    public function perimeter($a, $b, $c, $d)
    {
        
    }
}


//Классы, определенные как абстрактные, не могут быть созданы, и любой класс,
// содержащий хотя бы один абстрактный метод, также должен быть абстрактным.

//Методы, определенные как абстрактные, просто объявляют подпись метода -
// они не могут определить реализацию.