<?php
namespace Decorator;

class Cinnamon extends ComponentDecorator
{
    public function __construct(Dessert $dessert)
    {
        $this->dessert = $dessert;
    }

    public function getDescription()
    {
        return $this->dessert->getDescription() . ', Коррица';
    }

    public function cost()
    {
        return $this->dessert->cost() + 0.1;
    }
}