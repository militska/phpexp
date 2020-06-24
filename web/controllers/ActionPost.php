<?php

namespace web\controllers;


use mysqli;
use PDO;

class ActionPost {


    public function OpenCon()
    {
        $dbhost = "db";
        $dbuser = "root";
        $dbpass = "example";
        $db = "test";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }

    function CloseCon($conn)
    {
        $conn->close();

    }
        public function __toString()
    {

        try {

            var_export($this->OpenCon());


        } catch (\Exception $e)
        {
            var_export($e);
        }


        return "tr";
    }
}
