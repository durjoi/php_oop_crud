<?php
// Handling Employee
class Employee extends Db {

  // get Employees data
  public function getEmployees() {
    $sql = "SELECT * FROM employees";
    $result = $this->connect()->query($sql);
    if($result->num_rows > 0) {
      // Storing data in a array
      while($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }
}
