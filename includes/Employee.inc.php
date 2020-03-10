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

  // Insert Data to Database
  public function insert($fields) {
    $sql = "INSERT INTO employees (name, city, designation) VALUES ('".$fields['name']."', '".$fields['city']."', '".$fields['designation']."')";
     if ($this->connect()->query($sql) == TRUE) {
       header('Location: index.php');
     }
     else {
        echo "Error: " . $sql . "<br>" . $this->connect()->error;
     }
  }

  // Delete a row
  public function delete($id) {
    $sql = "DELETE FROM employees WHERE id=$id";
    if($this->connect()->query($sql)) {
      header('Location: index.php');
    }
    else {
       echo "Error: " . $sql . "<br>" . $this->connect()->error;
    }
  }

  // Get Selected Row Data
  public function edit($id) {
    $sql = "SELECT * FROM employees WHERE id=$id";
    $result = $this->connect()->query($sql);
    if($result) {
      return $result->fetch_assoc();
    }
    else {
       echo "Error: " . $sql . "<br>" . $this->connect()->error;
    }
  }

  // Update Data 
  public function update($id, $fields) {
    print_r($fields);
      $sql = "UPDATE employees SET name='".$fields['name']."', city='".$fields['city']."', designation='".$fields['designation']."' WHERE id=$id";
      if ($this->connect()->query($sql) == TRUE) {
        header('Location: index.php');
      }
      else {
         echo "Error: " . $sql . "<br>" . $this->connect()->error;
      }
  }
}
