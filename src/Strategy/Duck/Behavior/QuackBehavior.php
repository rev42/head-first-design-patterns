<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class QuackBehavior implements QuackInterfaceBehavior
{
    public function quack()
    {
        Utils::println("Quack!");
    }
}