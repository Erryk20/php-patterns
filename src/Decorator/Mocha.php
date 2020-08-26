<?php
declare(strict_types=1);

namespace Decorator;

class Mocha extends CondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
