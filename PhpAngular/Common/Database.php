<?php
class Database {
    private $host = "localhost";
    private $username = "kronosso_orange";
    private $password = "Colombia2021";
    private $dbname = "kronosso_orange";
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        mysqli_close($this->conn);
    }
}
?>