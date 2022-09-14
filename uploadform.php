
<?php 
 session_start();
 $user = $_SESSION['user_id'];
 $conn = mysqli_connect('localhost', 'root', '', 'new');
 $id = null;
if(isset($_POST['submit'])){
 // Count total files
 $countfiles = count($_FILES['file']['name']);
 
 // Looping all files
 for($i=0;$i<$countfiles;$i++){
   $file_name = $_FILES['file']['name'][$i];
  //  include("conn.php");
   $query = mysqli_query($conn, "select * from user where username = '$user' ");
   if (!$query) {
       printf("Error: %s\n", mysqli_error($conn));
       exit();
   }
   $row = mysqli_fetch_array($query);
   $id = $row["id"];
   echo $id;
   $file_path="localhost/folderup/uploads/" .$file_name;

   $sql = "INSERT into storage ( file , user_id ,date)  values ('$file_name','$id',now()) ";
   $result = mysqli_query($conn, $sql);
   // Upload file
   move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$file_name);
   header("Location: upload.php");
    
 }

} 
?>