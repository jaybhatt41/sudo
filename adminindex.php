<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SUD-O Admin</title>
    <link href="./css/boot.css" rel="stylesheet" />
    <link href="./css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!--link for icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <!-- JQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- DataTables CDN -->
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <!-- Initializing DataTables -->
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
    </head>

<body class="sb-nav-fixed ">
    <nav class="sb-topnav navbar navbar-expand navbar-dark  " style="background-color:#56baed height: 50px;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-5 " href="adminindex.php" style="height: 70px;"><img style="height: 100px;" src="su.png"/></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link  order-1 order-lg-0 me-4 me-lg-0"  id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Modal -->
<div class="modal fade" id="updatemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="update.php" >
      <input type="text" id="id" class="form-control" name="id" placeholder="update id"><br>
      <input type="text" id="email" class="form-control" name="email" placeholder="email"><br>
      <input type="text" id="password" class="form-control " name="username" placeholder="username"><br>
      <input type="text" id="password" class="form-control " name="password" placeholder="password"><br>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            
    </form>
    </div>
  </div>
</div>
<!--modal over-->
    <div id="layoutSidenav">
        <?php include("./include/sidebar.php"); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 p-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">User-Dashboard</li>
                    </ol>
                    <div class="card mb-4 w-75">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           User-Details
                        </div>
                        <div class="card-body">
                            <table id="myTable" class="table table-hovered table-striped table table-bordered">
                                <thead>
                                <tr>
                                        <th>Id</th>
                                        <th>username</th>
                                        <th>date/time</th>
                                        <th class="text-center">action</th>
                                        
                                    </tr>
                                </thead>
                                
                                                            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'new');
                $sql2="select *from user " ;
               
                $result2= mysqli_query($conn,$sql2);
                $rowcount=mysqli_num_rows($result2);
                while($rows= mysqli_fetch_assoc($result2))
                { ?>  
                                  
                                <tbody>
                                    <tr>
                                    <td>
                                        <?php echo $rows['id'] ?>
                                    </td>
                                            <td> <?php echo $rows['username'] ?> </td>
                                            <td> <?php echo $rows['status'] ?> </td>
                                    <td>
                                             <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this user?')"> <a href="admin_delete.php?deleteid=<?php echo $rows['id'] ?> " style="text-decoration:none"><i class="fa fa-trash"></i></a></button>
                                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updatemodal" >
                                                                         update
                                     </button>
                                     <td>
                                     <tr>
                                </tbody>
                                <?php
                        
                    }
                    ?>    
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <!-- <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->
    <!-- <script src="./js/datatables-simple-demo.js"></script> -->
    </body>

</html>

