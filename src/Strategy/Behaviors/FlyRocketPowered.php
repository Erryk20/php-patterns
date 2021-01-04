<?php


namespace Strategy\Behaviors;

class FlyRocketPowered implements FlyBehavior
{

    public function fly()
    {
        echo "I'm flying with a rocket!\n";
    }
}