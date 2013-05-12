<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class FlyWithWingsBehavior implements FlyInterfaceBehavior
{
    public function fly()
    {
        Utils::println("I'm flying");
    }
}