<?php
declare(strict_types=1);


class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak';
    }
}