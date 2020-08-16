<?php
declare(strict_types=1);

namespace Decorator;

abstract class Beverage implements BeverageInterface
{
    /**
     * @var string
     */
    public $description = "Unknow Beverage";

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
