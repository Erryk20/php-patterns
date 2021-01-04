<?php


namespace Strategy\Behaviors;


class Squeak implements QuackBehavior
{

    public function quack()
    {
       echo "Squeak\n";
    }
}