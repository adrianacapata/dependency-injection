<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 9/6/2017
 * Time: 4:04 PM
 */

namespace Workshop\DI;


class PersonFactory
{
    protected $container;

    /**
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param Container $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke($requestedName)
    {
        $coffee = $this->container->get(CoffeeInterface::class);
        $obj = new $requestedName($coffee);
        return $obj;
    }
}