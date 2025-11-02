<?php

class Database
{


    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "student";
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
