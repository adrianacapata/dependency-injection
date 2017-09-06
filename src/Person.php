<?php

namespace Workshop\DI;

class Person
{
    protected $coffee;

    /**
     * @return mixed
     */
    public function getCoffee()
    {
        return $this->coffee;
    }

    /**
     * @param mixed $coffee
     */
    public function setCoffee($coffee)
    {
        $this->coffee = $coffee;
    }

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

}
