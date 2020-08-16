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
        return $this->getPrice() + $this->beverage->cost();
    }

    /**
     * @return int
     */
    private function getPrice(): int
    {
        switch ($this->beverage->getSize()){
            case Beverage::GRANDE : $price = 15;
                break;
            case Beverage::VENTI : $price = 20;
                break;
            default : $price = 10;
        }

        return $price;
    }
}
