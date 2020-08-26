<?php
require_once '../vendor/autoload.php';

use Decorator\Espresso;
use Decorator\HouseBlend;
use Decorator\Mocha;
use Decorator\Soy;
use Decorator\Beverage;

$beverage = new Espresso();
$beverage->setSize(Beverage::GRANDE);
$beverage = new Soy($beverage);
echo $beverage->getDescription() . ' ' . $beverage->cost() . "<br>";

$beverage1 = new Espresso();
$beverage1->setSize(Beverage::GRANDE);
$beverage1 = new Mocha($beverage1);
$beverage1 = new Soy($beverage1);
echo $beverage1->getDescription() . ' ' . $beverage1->cost() . "<br>";

$beverage2 = new HouseBlend();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Soy($beverage2);

echo $beverage2->getDescription() . ' ' . $beverage2->cost();
