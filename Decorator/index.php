<?php
require_once('../autoload.php');

use Decorator\Espresso;
use Decorator\HouseBlend;
use Decorator\Mocha;

$beverage = new Espresso();
echo $beverage->getDescription() . ' ' . $beverage->cost() . "<br>";

$beverage2 = new HouseBlend();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);

echo $beverage2->getDescription() . ' ' . $beverage2->cost();
