<?php

class Database{
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $db = "test";
    private $conn;

    public function getConnection()
    {
        $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
}