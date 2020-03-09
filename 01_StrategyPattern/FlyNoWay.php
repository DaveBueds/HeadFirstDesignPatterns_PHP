<?php
declare(strict_types=1);


class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'not flying.';
    }
}