
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form method="post" onsubmit="validateForm()" name="myform">
            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">adminname</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password"id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
           

            <button class="btn btn-primary btn-lg btn-block" name="submit"type="submit">Login</button>
</form>
            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include("conn.php");
if(isset($_POST['submit']))
{
$adminname=$_POST['username'];
  
$password=$_POST['password'];
$_SESSION['user_id'] = $adminname;


$sql2="select * From admin where adminname='$adminname' and password='$password'"; 

$result1= mysqli_query($conn,$sql2);
if($result1->num_rows > 0)
{
    $row = mysqli_fetch_assoc($result1);
    $_SESSION['username'] = $row['adminname'];
    $_SESSION['id'] = $row['id'];
    echo "welcome".$_SESSION['id'];
    
    header("Location:adminindex.php");
}
else{

     $em = "Incorect User name or password";
    header("Location:loginadmin.php?error=$em&$data");
    exit;  

}
}
else
{
}

?>
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