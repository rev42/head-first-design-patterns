<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class SqueakQuackBehavior implements QuackInterfaceBehavior
{
    public function quack()
    {
        Utils::println("Squeak");
    }
}