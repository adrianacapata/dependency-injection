<?php

require_once ('vendor/autoload.php');

use Workshop\DI;
/*
if (class_exists(DI\Coffee::class))
    echo "exists";
else
    echo "does not exist";
*/
$coffee = new DI\Coffee();

$test = new DI\Person($coffee);

$config = require('config/Container.php');

$container = new DI\Container($config);

$coffee = $container->get(DI\CoffeeInterface::class);
$person = $container->get(DI\Person::class);
var_dump($coffee);
var_dump($person);
