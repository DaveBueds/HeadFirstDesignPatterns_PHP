<?php
declare(strict_types=1);


class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function swim()
    {
        // TODO: Implement swim() method.
    }

    public function display()
    {
        echo 'Im a rubber duck.';
    }
}