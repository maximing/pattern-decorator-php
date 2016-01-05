<?php
namespace Decorator;

class Chocolate extends ComponentDecorator
{
    public function __construct(Dessert $dessert)
    {
        $this->dessert = $dessert;
    }

    public function getDescription()
    {
        return $this->dessert->getDescription() . ', Шоколад';
    }

    public function cost()
    {
        return $this->dessert->cost() + 1.30;
    }
}