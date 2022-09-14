

<head>
    <link rel="stylesheet" href="style1.css">
</head><div class="wrapper fadeInDown">

  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
   <a href="sign.php"> <h2 class="inactive underlineHover">Sign Up </h2></a>
   <h3></h3>

    <!-- Icon -->
   

    <!-- Login Form -->
    <?php if(isset($_GET['error'])){?>
    <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>
       
    <form method="post" action="login_script.php" onsubmit="return validateForm()"name="myform">
      <input type="text" id="login" name="username" class="fadeIn second"  placeholder="username">
      <input type="text" id="password" name="password"  class="fadeIn third"  placeholder="password">
      <input type="submit"  name="submit" class="fadeIn fourth" value="Sign In">
    </form>
  
    <!-- Remind Passowrd -->
    <script>
     function validateForm() {
  let x = document.forms["myform"]["username"].value;
  if (x == "") {
    alert("username must be filled out");
  }
    let y = document.forms["myform"]["password"].value;
  if (y == "") {
    alert("password must be filled out");

    
  }
}
      </script>

  </div>
</div>


