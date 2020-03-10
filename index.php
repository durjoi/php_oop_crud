<?php
function __autoload($class) {
  require_once "includes/$class.inc.php";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
        $data = new Employee;
        $employees = $data->getEmployees();

        print_r($employees);
      ?>
   </body>
 </html>
