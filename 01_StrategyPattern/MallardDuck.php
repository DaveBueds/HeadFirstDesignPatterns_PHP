<?php
declare(strict_types=1);


class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function swim()
    {
        // TODO: Implement swim() method.
    }

    public function display()
    {
        echo 'Im a Mallard duck.';
    }
}