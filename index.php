<?php
// Auto loading class
function __autoload($class) {
  require_once "includes/$class.inc.php";
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <h3 class="text-center" style="margin: 20px 0">Employee Table</h1>
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

                     foreach ($employees as $row):
                   ?>
                    <tr>
                      <th scope="row"><?php echo $row['id']; ?></th>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['designation']; ?></td>
                      <td>
                        <button type="button" name="button" class="btn btn-warning">Edit</button>
                        <button type="button" name="button" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                <?php endforeach; ?>
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
