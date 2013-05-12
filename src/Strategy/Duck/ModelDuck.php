<?php

namespace Strategy\Duck;

use Strategy\Duck\Behavior\FlyNoWayBehavior;
use Strategy\Duck\Behavior\QuackBehavior;

class ModelDuck extends AbstractDuck
{
    public function __construct()
    {
        // Our model duck begins life grounded without a way to fly
        $this->flyBehavior = new FlyNoWayBehavior();
        $this->quackBehavior = new QuackBehavior();
    }

    public function display()
    {
        Utils::println("I'm a model Duck");
    }
}