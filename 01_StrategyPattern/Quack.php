<?php
declare(strict_types=1);


class Quack implements QuackBehavior
{
    public function __construct()
    {
    }

    public function quack()
    {
        echo 'Quack';
    }
}