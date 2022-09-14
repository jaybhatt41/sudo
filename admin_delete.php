<?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                if(isset($_GET['deleteid']))
                {
                $id= $_GET['deleteid'];
                echo $id;
                $delete = "DELETE FROM user WHERE id='$id' ";
                $results= mysqli_query($conn,$delete);
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