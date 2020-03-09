<?php

require_once './vendor/autoload.php';

$duck = new MallardDuck();
$duck->display();
$duck->performFly();
echo '\n';

$duck->setFlyBehavior(new FlyNoWay());
$duck->display();
$duck->performFly();
$duck->performQuack();
echo '\n';
echo '\n';