<?php

class Database{

    private $hostname = "bkda8njsz8tjd68r5m5f-mysql.services.clever-cloud.com";
    private $database = "bkda8njsz8tjd68r5m5f";
    private $username = "unnervfldaetvaun";
    private $password = "t4i6RKDYPw5dAWPMHjC0";
    private $charset = "utf8";

    function conectar(){
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