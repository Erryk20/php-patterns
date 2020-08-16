<?php
declare(strict_types=1);

namespace Decorator;

abstract class Beverage implements BeverageInterface
{
    const TALL = 1;
    const GRANDE = 2;
    const VENTI = 3;

    /**
     * @var int
     */
    protected $size = self::TALL;

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

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}
