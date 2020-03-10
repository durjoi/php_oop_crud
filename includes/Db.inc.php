<?php
// Handling database connection
class Db {
  private $servername;
  private $dbusername;
  private $dbpassword;
  private $dbname;

  protected function connect(){
    $this->servername = "localhost";
    $this->dbusername = "root";
    $this->dbpassword = "";
    $this->dbname     = "oop_crud";

    // Create connection
    $conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);

    // Check connection
    if($conn->connect_error) {
      die("Connection Failed: ". $conn->connect_erro);
    }

    return $conn;
  }
}
