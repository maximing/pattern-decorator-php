<?php
namespace Decorator;

class Pie extends Dessert
{
    public function __construct()
    {
        $this->description = 'Пирог';
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 7.00;
    }
}