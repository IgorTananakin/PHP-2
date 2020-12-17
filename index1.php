<?php


class MyClass
{

    private function output($name)
    {
        echo $name;
    }

    public function __get($property)
    {
        if (!property_exists($this, $property)) {
          $this->output($property);
        }
    }

}
//property_exists — Проверяет, содержит ли объект или класс указанный атрибут
$task = new MyClass();
$task->lolvzxv;

