<?php
namespace Decorator;

class MilkShake extends Dessert
{
    public function __construct()
    {
        $this->description = 'Молочный коктейль';
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 3.00;
    }
}