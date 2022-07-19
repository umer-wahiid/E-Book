<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar .navbar-nav .nav-link.dash{
            color: var(--light);
            background: none;
            border-color: transparent;
        }
        .navbar .navbar-nav .nav-link.cat{
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <h1>Category List</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fetch_category = mysqli_query($con,"select * from category");
                while($row = mysqli_fetch_array($fetch_category)){
                    echo'
                        <tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td><img src="cimagefolder/'.$row[2].'" width="50px" height="50px"></td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-info">Detail</a>
                                <a href="" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    ';        
                }
            ?>
        </tbody>
    </table>
</body>
</html>