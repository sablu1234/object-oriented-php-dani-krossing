<?php
class Dbh{
    private $host = "localhost";
    private $dbname = "myfirstdatabase";
    private $dbusername = "root";
    private $dbpassword = "";

    protected function connect (){
        try {
            $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            // Make sure to return the $pdo
        } catch (PDOException $e) {
            die("connection filed: " . $e->getMessage());
        }
    }
}

