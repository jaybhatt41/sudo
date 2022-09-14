<?php 
 session_start();
 $user = $_SESSION['user_id'];
 $conn = mysqli_connect('localhost', 'root', '', 'new');
 $id = null;
?>

<html>
    <head>
        <style>
             #logo{
           
            border-radius: 50px;
            height: 140px;
            width: 170px;
            position:absolute;
            left:2%;
            top:5%;
            padding-top:10px;
            
            
            </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title></title>
    </head>
    <body>
    <div class="navbar navbar-light h-25" style="background-color:#56baed">
    <div class="">
    <left><img src="su.png" alt="logo" id="logo">
    </div>
    <div class="w-25 " style="margin-left:5px">
    
    <h4><?php echo "Username : ". $user?></h4>
        
</div>
    <form method='post' action='uploadform.php' enctype='multipart/form-data' class="">
     
     <input class="btn btn-dark " type="file" name="file[]" id="file" multiple><br>
     <input class="btn btn-dark" type='submit' name='submit' value='Upload'>
     

    
    </form>
</div>
    </body>
</html>
<?php
              $conn = mysqli_connect('localhost', 'root', '', 'new');

            $uid = $_SESSION['id'];
            $sql2 = "select * from storage where user_id='$uid' ";
            $result2 = mysqli_query($conn, $sql2);
            ?>
            <div class="container w-100 " style="padding-left:150px">
            <table class="table table-responsive ">
            <thead>
                <th>File</th>
                <th>Update-on</th>
                <th >action</th><br><br>
            </thead>
            <?php
            while ($rows = mysqli_fetch_assoc($result2)) { ?>
                <tr>
                    <td>
                        <a class=""> <?php echo $rows['file'] ?> </a>
                    </td>
                    <td>
                        <?php echo $rows['date'] ?>
                    </td>
                    <td>
                        <a class="btn " style="font-size:20px;" download="<?php echo $rows['file'] ?>" href="upload/<?php echo $rows['file'] ?>"> <i class="fa fa-download"></i></a>
</a>
                    </td>
                    <td>
                        <button class="btn" style="font-size:20px;" onclick="return confirm('Are oyou sure to delete this file?')"> <a class="text-decoration:none" href="delete.php?deleteid=<?php echo $rows['id'] ?> "><i class="fa fa-trash"></i></a></button>
                    <td>
                    <td>
                        <button class="btn " style="font-size:20px;" class="share" onclick="myFunction('localhost/folderup/upload/<?php echo $rows['file'] ?>')"> <i class="fa fa-copy"></i></button>
                    <td>
                </tr>
                <script>
                    function myFunction(copy){
                        navigator.clipboard.writeText(copy);
                        alert("Copy text: " + copy);
                    }
                </script> 
            <?php
            }
            ?>
            </table>
            </div>
