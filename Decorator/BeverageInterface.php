<?php
namespace Decorator;

interface BeverageInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return float
     */
    public function cost(): float;
}
