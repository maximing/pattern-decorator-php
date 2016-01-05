<?php
namespace Decorator;

abstract class Dessert
{
    protected $description = 'Абстрактный десерт';

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}