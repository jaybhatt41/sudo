<?php
session_start();
include_once "conn.php";

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $password=md5($pwd);
   

    $sql="INSERT into user (username ,email , password ,status)
    values ('$username','$email','$password',now() )";
    $result= mysqli_query($conn,$sql);
    if(!$result)
    {
    echo "<script>alert('Something went wrong ')</script>";
    }
    else
    {
      header("Location:adminindex.php");
    }
}

?>