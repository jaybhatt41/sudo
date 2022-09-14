

<?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                if(isset($_GET['deleteid']))
                $id= $_GET['deleteid'];
               
                $delete = "DELETE FROM storage WHERE id='$id' ";
                $results= mysqli_query($conn,$delete);
                if($results)
                {
                   header("Location: upload.php");
                }
                else
                {
                    echo "failed!";
                }
?>