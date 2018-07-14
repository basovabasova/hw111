<?php

namespace classes;

class Pen extends SuperClassProduct implements PenInterface
{
    public $color;
   
    public function __construct($name, $color, $type, $price, $weight) 
    {
        parent:: __construct($name, $type, $price, $weight);
        $this->color = $color;
    }

    public function getDescription()
    {
        echo "На мой взгляд, {$this->name} - очень дорогая ручка. {$this->getPrice()} руб., Карл!" . '<br>';
    }

    public function getNewPen()
    {
        if ($this->getPrice() > 30000) {
            echo 'Безобразие.' . '<br>'; 
        }
        else {
            echo 'Это скандал!' . '<br>';
        } 
        if ($this->type !== 'ballpen') {
            echo "В задании же сказано - Шариковая ручка! А {$this->name} - перьевая." . '<br>';
        } 
    }

    public function getColor()
    {
        return $this->color;
    } 
}