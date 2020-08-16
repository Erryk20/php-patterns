<?php
declare(strict_types=1);

namespace Decorator;

abstract class CondimentDecorator implements BeverageInterface
{
    /**
     * @var BeverageInterface
     */
    public $beverage;

    /**
     * Mocha constructor.
     * @param BeverageInterface $beverage
     */
    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }
}
