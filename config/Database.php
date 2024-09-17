<?php
session_start();
//
//
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}


class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;


    // Constructor para establecer los parámetros de conexión
    public function __construct()
    {
        $config = parse_ini_file('./configBD.ini');
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['database'];


        try {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        } catch (PDOException $e) {
            echo "Connection";
        }
    }

    function getConnection()
    {
        return $this->conn;
    }
}