<?php
class Employee extends Db {
  public function getEmployees() {
    $sql = "SELECT * FROM employees";
    $result = $this->connect()->query($sql);
    if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }
}
