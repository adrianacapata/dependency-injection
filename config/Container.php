<?php

use Workshop\DI;

return [
    'invokables' => [
        DI\CoffeeInterface::class => DI\Coffee::class
    ],
    'factories' => [
        DI\Person::class => DI\PersonFactory::class
    ]
];