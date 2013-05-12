<?php

namespace Strategy\Duck;


abstract class AbstractDuck
{
    /**
     * @var Duck/Behavior/QuackBehavior $quackBehavior
     */
    protected $quackBehavior;
    /**
     * @var Duck/Behavior/FlyBehavior $flyBehavior
     */
    protected $flyBehavior;

    /**
     * Calling quack from QuackBehavior instance
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    /**
     * Calling fly from FlyBehavior instance
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function swim()
    {
        Utils::println("All ducks float, even decoys!");
    }

    /**
     * Set fly behavior whenever we want
     * @param Behavior\FlyInterfaceBehavior $fb
     */
    public function setFlyBehavior(Behavior\FlyInterfaceBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }

    /**
     * Set quack behavior whenever we want
     * @param Behavior\QuackInterfaceBehavior $qb
     */
    public function setQuackBehavior(Behavior\QuackInterfaceBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }

    public abstract function display();
}
