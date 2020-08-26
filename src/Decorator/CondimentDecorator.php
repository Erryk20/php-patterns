<?php
declare(strict_types=1);

namespace Decorator;

abstract class CondimentDecorator implements BeverageInterface
{
    public BeverageInterface $beverage;

    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getSize(): int
    {
        return $this->beverage->getSize();
    }
}
