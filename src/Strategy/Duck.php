<?php
declare(strict_types=1);

namespace Strategy;

use Strategy\Behaviors\FlyBehavior;
use Strategy\Behaviors\QuackBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior;
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!\n";
    }

    public abstract function display();
}