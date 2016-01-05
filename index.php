<?php
use Decorator\ {
    ComponentDecorator,
    Dessert,
    IceCream,
    MilkShake,
    Pie,
    Nuts,
    Chocolate,
    Cinnamon
};
require_once "Dessert.php";
require_once "ComponentDecorator.php";
require_once "IceCream.php";
require_once "MilkShake.php";
require_once "Pie.php";
require_once "Nuts.php";
require_once "Chocolate.php";
require_once "Cinnamon.php";

// Обычный молочный коктейль
$dessert = new MilkShake();
echo 'Десерт: ' . $dessert->getDescription();
echo '<br>';
echo 'Цена: ' . $dessert->cost() . ' USD';
echo '<br>';
/*
Вывод:
Десерт: Молочный коктейль
Цена: 3 USD
*/

// Молочный коктейль с корицей
$dessert = new Cinnamon(new MilkShake());
echo 'Десерт: ' . $dessert->getDescription();
echo '<br>';
echo 'Цена: ' . $dessert->cost() . ' USD';
echo '<br>';
/*
Вывод:
Десерт: Молочный коктейль, Коррица
Цена: 3.1 USD
*/

// Вкусный пирог с орешками, шоколадом и корицей
$dessert = new Cinnamon(new Chocolate(new Nuts(new Pie())));
echo 'Десерт: ' . $dessert->getDescription();
echo '<br>';
echo 'Цена: ' . $dessert->cost() . ' USD';
echo '<br>';
/*
Вывод:
Десерт: Пирог, Орешки, Шоколад, Коррица
Цена: 9.4 USD
*/

// Вкусный пирог с двойным шоколадом
$dessert = new Chocolate(new Chocolate(new Pie()));
echo 'Десерт: ' . $dessert->getDescription();
echo '<br>';
echo 'Цена: ' . $dessert->cost() . ' USD';
echo '<br>';
/*
Вывод:
Десерт: Пирог, Шоколад, Шоколад
Цена: 9.6 USD
*/

// Мороженное с тройными орешками и двойным шоколадом
$dessert = new Nuts(new Nuts(new Nuts(new Chocolate(new Chocolate(new IceCream())))));
echo 'Десерт: ' . $dessert->getDescription();
echo '<br>';
echo 'Цена: ' . $dessert->cost() . ' USD';
echo '<br>';
/*
Вывод:
Десерт: Мороженное, Шоколад, Шоколад, Орешки, Орешки, Орешки
Цена: 10.6 USD
*/