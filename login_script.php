<?php


session_start();
include_once "conn.php";
// $username = mysqli_real_escape_string($conn, $_POST['username']);

// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    
	$_SESSION['user_id'] = $username;
    $sql="select * From user where username='$username' and password='$password' "; 
    
    $result= mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
		echo "welcome".$_SESSION['id'];
        
        header("Location:upload.php");
     }
    else
    {
        
            $em = "Incorect User name or password";
            header("Location:login.php?error=$em&$data");
            exit;       

     }
    
   
}

else
{

}

?>
