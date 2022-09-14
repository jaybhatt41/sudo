<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Table #8</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container w-50">
      <h2 class="mb-5">Table #8</h2>
      

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table ">
          <thead>
            <tr class="">  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">Order</th>
              <th scope="col">Name</th>
             
              
            </tr>
          </thead>
          <?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                $sql2="select *from user " ;
                session_start();
                if($_SESSION['user_id'] == 1)
                {
                 $active="active";
                }
                else
                {
                  $active="dctive";
                }
                $result2= mysqli_query($conn,$sql2);
               
                while($rows= mysqli_fetch_assoc($result2))
                { ?>  
          <tbody>
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
              <?php echo $rows['id'] ?>
              </td>
              <td><a class="text"  > <?php echo $rows['username'] ?> </a></td>
             <td>
             <button class="delete" onclick="return confirm('Are you sure to delete this file?')"> <a href="admin.php?deleteid=<?php echo $rows['id'] ?> ">delete</a></button>
            </td>
            <td><?php
                  echo   $active;
            ?></td>
            </tr>
           
          </tbody>
          <?php
                        
                    }
                    ?>
        </table>
        <form method="post">

                  </form>

      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                if(isset($_GET['deleteid']))
                $id= $_GET['deleteid'];
                echo $id;
                $delete = "DELETE FROM user WHERE id='$id' ";
                $results= mysqli_query($conn,$delete);
                if($results)
                {
                   
                }
                else
                {
                    echo "failed!";
                }
?>


                
               

