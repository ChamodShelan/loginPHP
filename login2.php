<?php
$connection = mysqli_connect("localhost","root","","chanel");


if(isset($_POST['login']))
{
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $db = "SELECT * FROM users WHERE u_name ='$uname' AND password = '$pass'";
    
    $result = mysqli_query($connection,$db);
    $del = mysqli_fetch_array($db);

    if(mysqli_num_rows($result)>0)
    {
        header("Location:display.php");
    }
    else
    {
        echo "No Data Found";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="text-common.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="fullimage.css">
	<title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="button-common.css">
</head>
<body>
<div class="header">
    <h2 class="logo">E-CHANNEL</h2>
    <input  class="text" type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn">
      <i class="fas fa-ellipsis-h"></i>
    </label>

    <ul class="menu">
      <a href="index.php">Home</a>
      <a href="apoinment.php">APOINMENT</a>
      <a href="login2.php">LOGIN</a>
      <a href="">ABOUT US</a>
      <a href="#">CONTACT</a>
      <label for="chk" class="hide-menu-btn">
        <i class="fas fa-times"></i>
      </label>
    </ul>
  </div>
    <form action="login2.php" method="POST" class="center">
        <h1>LOGIN</h1>

        <br>
        <h3>USERNAME</h3>
        <input class="text" type="text" name="uname" placeholder="Username" required>
        <br>
        <h3>PASSWORD</h3>
        <input class="text" type="password" name="pass" placeholder="Password" required>
        <br>
        <button class="btn" type="submit" name="login">Login</button>
        <button class='btn'type="reset">Reset</button>

    </form>
</body>
</html>