<?php


namespace Strategy\Behaviors;

class Quack implements QuackBehavior
{

    public function quack()
    {
       echo "Quack \n";
    }
}