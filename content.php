

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4 w-75">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>username</th>
                                <th class="text-center">action</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th >action</th>
                               
                            </tr>
                        </tfoot>
                        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'new');
        $sql2="select *from user " ;
       
        $result2= mysqli_query($conn,$sql2);
       
        while($rows= mysqli_fetch_assoc($result2))
        { ?>  
                          
                        <tbody>
                            <tr>
                            <td>
                                <?php echo $rows['id'] ?>
                            </td>
                                    <td> <?php echo $rows['username'] ?> </td>
                            <td>
                                     <button class="btn btn-danger" onclick="return confirm('Are oyou sure to delete this file?')"> <a href="admin_delete.php?deleteid=<?php echo $rows['id'] ?> " style="text-decoration:none"><i class="fa fa-trash"></i></a></button>
                             </td>
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
 
</div>
