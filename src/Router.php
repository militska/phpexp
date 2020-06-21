<?php

namespace src;
/**
 * Class Router
 */
class Router
{

    private $class;

    /**
     * Router constructor.
     * @param $config
     */
    public function __construct($config)
    {
        include($config);

        $paramsRoute = [];

        $action = strtolower(explode("/", $_SERVER['REQUEST_URI'])[1]);

//        $this->class = $paramsRoute[$action];
        $this->class = ucfirst($action);
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
