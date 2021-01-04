<?php


namespace Strategy\Behaviors;


class MuteQuack implements QuackBehavior
{

    public function quack()
    {
       echo "<< Silence >> \n";
    }
}