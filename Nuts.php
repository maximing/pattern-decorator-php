<?php
namespace Decorator;

class Nuts extends ComponentDecorator
{
    public function __construct(Dessert $dessert)
    {
        $this->dessert = $dessert;
    }

    public function getDescription()
    {
        return $this->dessert->getDescription() . ', Орешки';
    }

    public function cost()
    {
        return $this->dessert->cost() + 1.00;
    }
}