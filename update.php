<?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                if(isset($_POST['id']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']))
                {
                $id= $_POST['id'];
                $email= $_POST['email'];
                $username= $_POST['username'];
                $password= $_POST['password'];

                
                
                
                $UPDATE = "UPDATE  user SET id='$id' , email='$email', username='$username' , password='$password' where id='$id'";
                $results= mysqli_query($conn,$UPDATE);
                if($results)
                {
                   header("Location:adminindex.php");
                }
                else
                {
                    echo "failed!";
                }
                }
?>