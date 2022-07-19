<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css"/>
    <style>
        .navbar .navbar-nav .nav-link.dash,.cat,.pro{
            color: var(--light);
            background: none;
            border-color: transparent;
        }
        .navbar .navbar-nav .nav-link.bra{
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }        
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Brand List</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Image</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fetch_brand = mysqli_query($con,"select * from brand");
            while($row = mysqli_fetch_array($fetch_brand)){
                echo'
                    <tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td><img src="bimagefolder/'.$row[2].'" width="50px" height="50px"></td>
                        <td><img src="bimagefolder/'.$row[2].'" width="50px" height="50px"></td>
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
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#mytable").DataTable();
        });
    </script>

    
    
    
</body>
</html>