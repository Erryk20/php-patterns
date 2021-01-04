<?php
require_once '../vendor/autoload.php';

use Strategy\MallardDuck;
use Strategy\ModelDuck;
use Strategy\Behaviors\FlyRocketPowered;
use Strategy\Behaviors\MuteQuack;

echo "<pre>";

$mallard = new MallardDuck();
$mallard->performFly();
$mallard->performQuack();

echo "\n\n";

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();

$model->performQuack();
$model->setQuackBehavior(new MuteQuack());
$model->performQuack();

