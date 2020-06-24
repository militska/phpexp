<?php

namespace src;

/***
 * interface BaseDbConnect
 * @package src
 */
interface BaseDbConnectInt
{

    /***
     * @return mixed
     */
     public function getConnect();

    /**
     * @param $connect
     * @return mixed
     */
     public function close($connect);
}