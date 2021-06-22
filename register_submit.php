<?php
   session_start();
   include("config.php");
   if(isset($_POST['submit']) && $_POST["username"]!="" && $_POST["password"]!="" && $_POST["repassword"]!="")
   {
      $username= $_POST["username"];
      $password = $_POST["password"];
      $repassword= $_POST["repassword"];
      if($password != $repassword){
         $_SESSION["thongbao"] = "Password does not coincide with re-entering password!";
         header("location:register.php");
         die();
      }
      $sql= "SELECT * from login where username ='$username'";
      $row=mysqli_query($mysqli,$sql);
      $count=mysqli_fetch_array($row);
      if($count>0){
         $_SESSION["thongbao"] = "Username already exists!";
         header("location:register.php");
         die();
     }
      $sql= "INSERT into login (username,password) values('$username','$password')";
      $resuft=mysqli_query($mysqli,$sql);
      header("location:login.php");
      $_SESSION["thongbao"] = "Congratulations on your successful account creation!";
   }
   else{
      $_SESSION["thongbao"] = "Please enter your complete information!";
      header("location:register.php");
   }
?>