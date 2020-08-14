<?php
declare(strict_types=1);

namespace Decorator;

use Decorator\Beverage;

class Espresso extends Beverage
{
	public function __construct()
	{
		$this->description = 'Espresso';
	}

	public function cost(): float
	{
		return 1.99;
	}
}
