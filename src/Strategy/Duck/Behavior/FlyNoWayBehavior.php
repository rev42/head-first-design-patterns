<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class FlyNoWayBehavior implements FlyInterfaceBehavior
{
    public function fly()
    {
        Utils::println("I can't fly");
    }
}