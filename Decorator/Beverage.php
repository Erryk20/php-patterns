<?php
declare(strict_types=1);
namespace Decorator;

abstract class Beverage {

	public $description = "Unknow Beverage";

	public function getDescription(): string
	{
		return $this->description;
	}

	public abstract function cost(): float;
}
