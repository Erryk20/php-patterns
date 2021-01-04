<?php


namespace Strategy\Behaviors;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "I'm flying \n";
    }
}