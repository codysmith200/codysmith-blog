<?php

// this class will make it easyer to read and cleaner up the code
// A class is a collection of variables and functions working with these variables.
//a class is a constent of a object 
class Database {

    // private is where this code is only abel to be seen in this file it is in not out of the file 
    private $connection;
    private $host;
    private $username;
    private $password;
    private $Database;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // this code connects me to localhost and logs in 
        $this->connection = new mysqli($host, $username, $password);
        // shows connection error 
        if ($this->connection->connect_error) {
            die("error: " . $this->connection->connect_error);
        }
        $exists = $this->connection->select_db($database);

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");
            if ($query) {
                echo "secsessfully created  database:" . $database;
            }
        } else {
            echo "database already exists";
        }
    }

    public function openconnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->Database);
        // this exits out of my web site and shows me the error 
        if ($this->connection->connect_error) {
            die("error: " . $this->connection->connect_error);
        }
    }

    // this checs if there is a connection 
    public function closeconection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openconnection();
        $query = $this->connection->query($string);

        $this->closeconection();

        return $query;
    }

}
