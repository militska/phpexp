<?php

namespace app\web\controllers;


use app\src\MariaDbConnect;

/**
 * Class ActionPost
 * @package app\web\controllers
 */
class ActionPost
{

    /***
     * @return string
     */
    public function __toString()
    {

        try {
            $conect = new MariaDbConnect("root", "qwerty", "my_db");
            $link = $conect->getConnect();
            $sql = 'SELECT * FROM test';
            foreach ($link->query($sql) as $row) {
                var_export($row);
            }

            echo "Соединение с MySQL установлено!" . PHP_EOL;
            echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

            mysqli_close($link);


        } catch (\Exception $e) {
            var_export($e);
        }


        return "tr";
    }
}
