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

  public function insert($fields) {
    $sql = "INSERT INTO employees (name, city, designation) VALUES ('".$fields['name']."', '".$fields['city']."', '".$fields['designation']."')";
     if ($this->connect()->query($sql) == TRUE) {
       echo "New record created successfully";
     }
     else {
        echo "Error: " . $sql . "<br>" . $this->connect()->error;
     }
  }
}
