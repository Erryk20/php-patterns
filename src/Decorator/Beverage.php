<?php
declare(strict_types=1);

namespace Decorator;

abstract class Beverage implements BeverageInterface
{
    const TALL = 1;
    const GRANDE = 2;
    const VENT = 3;

    protected int $size = self::TALL;

    public string $description = "Unknown Beverage";

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}
