<?php
class ClienteModel {
    private $conn;
  
    public function __construct($conn) {
      $this->conn = $conn;
    }
  
    public function getAll() {
      $sql = "SELECT * FROM cliente";
      $result = mysqli_query($this->conn, $sql);
  
      $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
      }
  
      return $rows;
    }
  }
  
?>