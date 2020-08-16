<?php
declare(strict_types=1);

namespace Decorator;

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
	public function __construct()
	{
		$this->description = "Dark roast";
	}

    /**
     * @return float
     */
	public function cost(): float
	{
		return .80;
	}
}
