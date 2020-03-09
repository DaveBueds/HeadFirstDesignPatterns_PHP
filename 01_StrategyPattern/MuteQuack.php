<?php
declare(strict_types=1);


class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo 'Not quacking';
    }
}