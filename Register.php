<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Form Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3">
         <h2>Sign Up</h2>
         <p>Please fill this form to create an account</p>
         <?php
            if(isset($_SESSION["thongbao"]))
            {
             echo $_SESSION["thongbao"];
            unset($_SESSION["thongbao"]);
            }
         ?>
         <form action="register_submit.php" method="POST">
            <!-- Vertical -->
            <div class="form-group">
               <label for="myEmail">Username</label>
               <input type="text" id = "myEmail" class="form-control" name="username" placeholder="Username">
               <label for="myPassword">Password</label>
               <input type="password" id="myPassword" class="form-control" placeholder="Password" name="password">
               <label for="myPassword">Confirm Password</label>
               <input type="password" id="myPassword" class="form-control" placeholder="Confrim Password" name="repassword">
               <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
         </form>
         <p>Already have an account?</p>
         <a href="login.html">Login here.</a>
          
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>