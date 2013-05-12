<?php

require __DIR__ . '/../../vendor/autoload.php';

use Common\Utils;
use Strategy\Duck as Duck;

Utils::println("::Making specific duck");
$mallard = new Duck\MallardDuck();
$mallard->performQuack();
$mallard->performFly();

Utils::println("::Making model duck and changing its flying behavior");
$modelDuck = new Duck\ModelDuck();
$modelDuck->performFly();
$modelDuck->setFlyBehavior(new Duck\Behavior\FlyRocketPoweredBehavior());
$modelDuck->performFly();
