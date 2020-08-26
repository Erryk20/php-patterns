<?php

namespace Factory;

final class NYPizzaStore extends PizzaStore
{
    const CHEESE = 'cheese';
    const VEGGIE = 'veggie';
    const CLAM = 'clam';
    const PEPPERONI = 'pepperoni';

    protected function createPizza(string $type): Pizza
    {
        switch ($type) {
            case self::CHEESE :
                return new NYStyleCheesePizza();
            case self::VEGGIE :
                return new NYStyleVeggiePizza();
            case self::CLAM :
                return new NYStyleClamPizza();
            case self::PEPPERONI :
                return new NYStylePepperoniPizza();
        }

        return new DefaultPizza();
    }
}
