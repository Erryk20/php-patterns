<?php

namespace Decorator;

interface BeverageInterface
{
    public function getDescription(): string;

    public function cost(): float;

    public function getSize(): int;
}
