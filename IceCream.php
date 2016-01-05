<?php
namespace Decorator;

class IceCream extends Dessert
{
    public function __construct()
    {
        $this->description = 'Мороженное';
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 5.00;
    }
}