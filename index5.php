<?php

//Организовать сохранение и отображение всех значений, присваиваемых недоступным свойствам объекта

class Task_5
{
    protected $values = array();
    private $id;
    private $text;
    protected $coors;

    public function __construct($id, $text, array $coors)
    {
        $this->id = $id;
        $this->text = $text;
        $this->coors = $coors;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property) && $property != "values") {
                $this->values[$property][] = $value;
        }
    }
}

$task = new Task_5( 1, 'testing', array('x' => 23, 'y' => 17));

$task->id = 12;
$task->id = 1;

$task->text = 'hello';
$task->text = 'heoasd';

$task->coors = array('x' => 33, 'y' => 27);
$task->coors = array('x' => 44, 'y' => 55);

$task->values = array('x' => 44, 'y' => 55);

echo '<pre>';
var_dump($task);