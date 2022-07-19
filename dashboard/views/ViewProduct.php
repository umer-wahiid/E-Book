<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar .navbar-nav .nav-link.dash,.cat{
            color: var(--light);
            background: none;
            border-color: transparent;
        }
        .navbar .navbar-nav .nav-link.pro{
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fetch_product = mysqli_query($con,'SELECT * from product
                INNER JOIN category
                ON
                product.pcategory = category.cid
                INNER JOIN brand
                ON
                product.pbrand = brand.bid
                ');
                while($row = mysqli_fetch_array($fetch_product)){
                    echo'
                        <tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td>'.$row[2].'</td>
                            <td>'.$row[3].'</td>
                            <td>'.$row[8].'</td>
                            <td>'.$row[10].'</td>
                            <td><img src="pimagefolder/'.$row[6].'" width="50px" height="50px" alt=""></td>
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