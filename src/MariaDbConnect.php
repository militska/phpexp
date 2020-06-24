<?php

namespace src;

/***
 * Class MariaDbConnect
 * @package src
 */
final class MariaDbConnect implements BaseDbConnectInt
{

    /***
     * @var string
     */
    private $type = 'mariadb';

    /***
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /***
     * @var string
     */
    private $db;

    /**
     * MariaDbConnect constructor.
     * @param $name
     * @param $password
     * @param $db
     */
    public function __construct($name, $password, $db)
    {
        $this->name = $name;
        $this->password = $password;
        $this->db = $db;
    }


    /**
     * @return false|\mysqli
     */
    public function getConnect()
    {
        $conn = mysqli_connect($this->type, $this->name, $this->password, $this->db);

        if (!$conn) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Соединение с MySQL установлено!" . PHP_EOL;
        echo "Информация о сервере: " . mysqli_get_host_info($conn) . PHP_EOL;

        return $conn;
    }


    /***
     * @param $connect
     */
    public function close($connect)
    {
        $connect->close();

    }

}