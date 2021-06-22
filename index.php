<?php
session_start();
if(isset($_GET['action']) && $_GET['action']=="logout"){
    unset($_SESSION['dangnhap']);
    header("index.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <P> <img src="sneakershop.png" />
    </P>
    <div id="navigation">
        <nav id="topmenu">
            <ul>
              <li><a href="#">Home page</a></li>
              <li><a href="Profile.php">Profile</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="Register.php">Register</a></li>
              <li><a href="Contact.html">Contact</a></li>
              <li><a href="cart.php">Cart</a></li>
              <li><a href="index.php?action=logout">Log out: <?php
              
              if(isset($_SESSION['dangnhap'])){
                  echo $_SESSION['dangnhap'];
                  echo $_SESSION['id_user'];
              }
              ?> </a></li>

              
            </ul>
          </nav>
        </div id ="header">
    <section>
<?php
        include("config.php");
        
        $sql="SELECT*FROM tbl_sanpham LIMIT 20";
        $sql_query=mysqli_query($mysqli,$sql);
        
        while($rows=mysqli_fetch_array($sql_query)){
?>
        <article>

        <input type="hidden" value="Vans" name="product_name"/>
        <input type="hidden" value="vanssss.jpg" name="product_img"/>
            <h1> <?php echo $rows['tensp'] ?> </h1>
            <p> <?php echo $rows['tomtat'] ?> </p>
            <img src="<?php echo $rows['hinhanh'] ?>" alt="">
            <div class="price"> <?php echo $rows['giasp'] ?> </div>
            <ul>
                <li>Auto Size</li>
                <li>Full Color</li>
            </ul>
            <form action="themgiohang.php?idproduct= <?php echo $rows['id_sanpham'] ?>" method="POST">
             <input type="submit" value="Add to Cart" name="themgiohang">
            </form>
        </article>
<?php
        }
?>
        
    </section>
    
</body>
</html>
