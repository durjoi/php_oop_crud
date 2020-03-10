<?php
// Auto loading class
function __autoload($class) {
  require_once "includes/$class.inc.php";
}
if (isset($_GET['id'])) {
  $employee = new Employee;
  $employee->delete($_GET['id']);
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <style media="screen">
       .header {
         display: flex;
       }
       .header-item {
         flex: 1;
         margin: 10px 0px;

       }
       .header-item a {
         float: right;
       }

     </style>
   </head>
   <body>
     <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
           <a class="navbar-brand" href="#">Employee Management System</a>
             <ul class="nav navbar-nav navbar-right">
               <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
               </li>
             </ul>
         </div>
        </nav>
     </header>
     <main>
       <div class="container mt-4">
         <div class="row">
           <div class="col-md-12">
             <div class="header">
               <div class="header-item">
                 <h3>Employee Table</h1>
               </div>
               <div class="header-item">
                 <a href="createEmployee.php" class="btn btn-primary">Add New</a>
               </div>
             </div>

             <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                     $data = new Employee;
                     $employees = $data->getEmployees();
                    if($employees):
                     foreach ($employees as $row):
                       ?>
                    <tr>
                      <th scope="row"><?php echo $row['id']; ?></th>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['designation']; ?></td>
                      <td style="">
                        <!-- <a  type="submit" name="delete" class="btn btn-danger">Delete</button> -->
                          <a class="btn btn-warning" href="editEmployee.php?edit=<?php echo $row['id']; ?>">Edit</a>
                          <a class="btn btn-danger" href="<?php echo$_SERVER['PHP_SELF'];?>?id=<?php echo $row['id']; ?>">Delete</a>

                        <!-- <form style="float:right;" class="" type="hidden" action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post">
                          <input type="hidden" name="id" value="<?php //echo $row['id']; ?>">
                          <button  type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form> -->

                      </td>
                    </tr>
                  <?php
                    endforeach;
                  endif;
                  ?>
                </tbody>
              </table>
           </div>
         </div>
       </div>
     </main>
     <footer>

     </footer>



      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
 </html>
