<?php

namespace Strategy\Duck;

use Strategy\Duck\Behavior\QuackBehavior;
use Strategy\Duck\Behavior\FlyWithWingsBehavior;
use Common\Utils;

class MallardDuck extends AbstractDuck
{
    public function __construct()
    {
        // a duck is delegating its flying and quacking behavior
        $this->quackBehavior = new QuackBehavior();
        $this->flyBehavior = new FlyWithWingsBehavior();
    }

    public function display()
    {
        Utils::println("I'm a real Mallard duck");
    }
}