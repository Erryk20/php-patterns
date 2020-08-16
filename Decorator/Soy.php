<?php
declare(strict_types=1);

namespace Decorator;

use Decorator\Beverage;
use \Decorator\CondimentDecorator;

class Soy extends CondimentDecorator
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .30 + $this->beverage->cost();
    }
}
