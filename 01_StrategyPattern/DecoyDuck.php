<?php
declare(strict_types=1);


class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function swim()
    {
        // TODO: Implement swim() method.
    }

    public function display()
    {
        echo 'Im a Mallard duck';
    }
}