<?php

class Database{

    private $hostname = "localhost";
    private $database = "my_database";
    private $username = "my_user";
    private $password = "123456";
    private $charset = "utf8";

    function connect(){
        try {
            $connectionString = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connectionString, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }
}
?>
