<?php
session_start();
include_once "conn.php";

// $username = mysqli_real_escape_string($conn, $_POST['username']);

// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
   

    $sql="INSERT into user (username ,email , password,status )
    values ('$username','$email','$password',now() )";
    $result= mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "<script>alert('Something went wrong ')</script>";
    }
    else
    {
      header("Location:login.php");
    }
}

?>
<head>
    <link rel="stylesheet" href="style1.css">
</head><div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign Up </h2>
   <a href="login.php"> <h2 class="inactive underlineHover">Sign In </h2></a>

    <!-- Icon -->

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="text" id="email" class="fadeIn third" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password"><br><br>
      <br>      <input type="submit" name="submit" class="fadeIn fourth" value="Sign up">
    </form>
    <!-- Remind Passowrd -->
  </div>
</div>


