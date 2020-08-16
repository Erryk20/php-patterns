<?php
declare(strict_types=1);

namespace Decorator;

use \Decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
