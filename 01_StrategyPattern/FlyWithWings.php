<?php
declare(strict_types=1);


class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo 'Flying with wings.';
    }
}