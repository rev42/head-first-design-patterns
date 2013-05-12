<?php

namespace Strategy\Duck\Behavior;

use Common\Utils;

class MuteQuackBehavior implements QuackInterfaceBehavior
{
    public function quack()
    {
        Utils::println("<< Silence >>");
    }
}