<?php
declare(strict_types=1);

namespace Decorator;

class Soy extends CondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost(): float
    {
        return $this->getPrice() + $this->beverage->cost();
    }

    private function getPrice(): int
    {
        switch ($this->beverage->getSize()) {
            case Beverage::GRANDE :
                $price = 15;
                break;
            case Beverage::VENT :
                $price = 20;
                break;
            default :
                $price = 10;
        }

        return $price;
    }
}
