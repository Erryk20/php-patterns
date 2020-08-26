<?php
require_once('../vendor/autoload.php');

use Factory\NYPizzaStore;


$pizza = (new NYPizzaStore())->orderPizza(NYPizzaStore::CHEESE);
dump($pizza);
