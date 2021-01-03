<?php

class Connection
{

    private const SERVERNAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "root";
    private const DBNAME = "bdsalud";
    protected $conn;

    function __construct()
    {

        try {

            $this->conn = new PDO(
                "mysql:host=" . self::SERVERNAME . ";dbname=" . self::DBNAME,
                self::USERNAME,
                self::PASSWORD
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            
        } catch (PDOException $e) {
            echo "!Error! " . $e->getMessage();
        }
    }
}
