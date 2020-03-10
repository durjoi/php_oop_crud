<?php
// Auto loading class
function __autoload($class) {
  require_once "includes/$class.inc.php";
}

if(isset($_POST['submit'])) {
   $fields = [
     'name' => $_POST['name'],
     'city' => $_POST['city'],
     'designation' => $_POST['designation'],
   ];
   $employee = new Employee();
   $employee->insert($fields);
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

     </style>
   </head>
   <body>
     <header>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
           <a class="navbar-brand" href="#">Employee Management System</a>
             <ul class="nav navbar-nav navbar-right">
               <li class="nav-item">
                 <a class="nav-link" href="#">Home</a>
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
             <div class="card" style="width: 30rem;margin:auto;">
                <div class="card-header">
                  Employee Add Form
                </div>
                <div class="card-body">
                  <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                   </div>
                   <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" name="city" placeholder="City Name">
                   </div>
                   <div class="form-group">
                     <label for="designation">Designation</label>
                     <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
                   </div>
                   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 </form>
                </div>
              </div>
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
