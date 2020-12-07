<?php

class Connection
{

    private const SERVERNAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "root";
    private const DBNAME = "bdsalud";

    function conectar()
    {

        try {

            $conn = new PDO(
                "mysql:host=" . self::SERVERNAME . ";dbname=" . self::DBNAME,
                self::USERNAME,
                self::PASSWORD
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
            
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }
    }
}
