<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 9/6/2017
 * Time: 3:05 PM
 */

namespace Workshop\DI;


class Container
{
    protected $config;

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get($class)
    {
        if(array_key_exists($class, $this->config['invokables'])) {
            $coffeeClass = $this->config['invokables'][$class];
           return new $coffeeClass;
        }
        if(array_key_exists($class, $this->config['factories'])) {
            $factoryClass = $this->config['factories'][$class];

            $factory = new $factoryClass($this);

            $obj = $factory($class);
            return $obj;
        }
    }
}
