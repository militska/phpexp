<?php

/**
 * Class Router
 */
class Router
{

    public $nameClass;

    public function __construct()
    {
        $action = ucfirst(strtolower(explode("/", $_SERVER['REQUEST_URI'])[1]));

        $this->nameClass = "Action" . $action;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->nameClass;
    }
}
