<?php
declare(strict_types=1);

namespace Decorator;

class DarkRoast extends Beverage
{
	public function __construct()
	{
		$this->description = "Dark roast";
	}

	public function cost(): float
	{
		return .80;
	}
}
