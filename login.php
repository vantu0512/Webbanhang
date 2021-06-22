<?php
include("config.php");
if(isset($_POST['loginbutton'])){
session_start();
$taikhoan=$_POST['taikhoan'];
$matkhau=$_POST['matkhau'];
$sql="SELECT*FROM login WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
$row=mysqli_query($mysqli,$sql);
$count=mysqli_fetch_array($row);
if($count>0){
   $_SESSION['dangnhap']=$taikhoan;
   $_SESSION['id_user']=$count['id'];
   header("location:index.php");
}
}
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
            <h2>Login</h2>
            <p>Please fill in your credentials to login</p> 
            <form method = "POST">
               <!-- Vertical -->
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id = "myEmail" class="form-control" placeholder="Username" name = "taikhoan">
                  <label for="myPassword">Password</label>
                  <input type="password" id="myPassword" class="form-control" placeholder="Password" name="matkhau">
                  <button type="submit" class="btn btn-primary" name="loginbutton">Login</button>
               </div>
            </form>
            <p>Don't have an account?</p>
            <a href="Register.php">Sign up now.</a>
            
         </div>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      </body>
   </html>