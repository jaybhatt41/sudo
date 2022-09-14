<html>
<head>
<?php
session_start();
$id = $_SESSION['user_id'];
$conn = mysqli_connect('localhost', 'root', '', 'new');
// $id = null;
?>
</head>
<body>
    <!-- Upload form -->
    <form action="upload.php" name="upload" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td>
                   
                    </label>
                    <input type="file" id="file" style="" name="myfile" >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" placeholder="ok">
                </td>
            </tr>
        </table>
    </form>

    <!-- Display files -->
    <div class="side-bar">
        <h1>sud-o</h1>
        <h2>USERNAME : <?php echo $_SESSION['user_id'] ?></h2>
        <!-- <input type="text" name="" placeholder="search here.." id="myinput" onkeyup="search()">   -->
    </div>
    <table class="upload-area" border="1">
        <div>
            <?php
            $uid = $_SESSION['id'];
            $sql2 = "select * from sto where user_id='$uid' ";
            $result2 = mysqli_query($conn, $sql2);
            ?>
            <tr>
                <th>File</th>
                <th>updated on</th>
                <th>action</th><br><br>
            </tr>
            <?php
            while ($rows = mysqli_fetch_assoc($result2)) { ?>
                <tr>
                    <td>
                        <a class="text"> <?php echo $rows['file'] ?> </a>
                    </td>
                    <td>
                        <?php echo $rows['date'] ?>
                    </td>
                    <td>
                        <a class="download" download="<?php echo $rows['file'] ?>" href="uploads/<?php echo $rows['file'] ?>"> download</a>
                    </td>
                    <td>
                        <button class="delete" onclick="return confirm('Are you sure to delete this file?')"> <a href="delete.php?deleteid=<?php echo $rows['id'] ?> ">delete</a></button><br><br><br>
                    <td>
                </tr>
            <?php
            }
            ?>
        </div>
    </table>
</body>
</html>