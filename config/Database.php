<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Database
{
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function __construct()
    {
        $config = parse_ini_file('./configBD.ini');
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['database'];

        try {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            if (!$this->conn) {
                die("Error en la conexion: " . mysqli_connect_error());
            }
        } catch (PDOException $e) {
            echo "Error en la conexion: " . $e->getMessage();
        }
    }

    function getConnection()
    {
        return $this->conn;
    }
}