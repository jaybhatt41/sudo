


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
    

    $sql="select * From user where username='$username'"; 
    
    $result= mysqli_query($conn,$sql);
    if($result->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
		echo "welcome".$_SESSION['id'];
        
        header("Location:upload.php");
     }
    else{
        echo "error";
    }
}

?>

<html>
<head>
	<title>this login form</title>
	<link rel="stylesheet" type="text/css" href="prg.css">
	<style>
		a
		{
			color:black;
			border-radius: 24px;
			transition: 0.25s;
			text-decoration:none;
		}
		
		
		a:hover
		{
			color:white;
			background:black;
			padding: 10px 10px;
		}
	</style>
</head>
<body align="center">
	
	<table align="center" border="0px" cellspacing="20">

		<header>E-Drive</header>
		<form  action="" name="" method="POST"  >
			<tr cellpadding="0" >
			<tr>
				<td><input type="text"  placeholder="username"  id="username" name="username"></td>
				
			</tr>
			<tr>
				<td><input type="password" id="password" placeholder="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" placeholder="submit"  name="submit" value="Submit" color="red"/></td>
			</tr>
			<!-- <input type="button" value="login" id="submit" onclick="validate()"> -->
			<i class="fa fa-facebook"></i>
            <tr>
                <td><a href="signup.php">Signup Here</a></td></td>
              
              </tr>
		</tr>
	</form>
	</table>
	
</body>
</html>