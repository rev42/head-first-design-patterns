<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class FlyRocketPoweredBehavior implements FlyInterfaceBehavior
{
    public function fly()
    {
        Utils::println("I'm flying with a rocket");
    }
}