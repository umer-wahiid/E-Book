<?php
    require "../apis/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar .navbar-nav .nav-link.dash,.cat,.pro,.use{
            color: var(--light);
            background: none;
            border-color: transparent;
        }
        .navbar .navbar-nav .nav-link.use{
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }           
    </style>
</head>
<body>
<h1>User Information</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Profile Picture</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fetch_user = mysqli_query($con,"SELECT * from tbl_user_data");
                while($user_row = mysqli_fetch_array($fetch_user)){
                    echo'
                        <tr>
                            <td>'.$user_row[0].'</td>
                            <td>'.$user_row[1].'</td>
                            <td>'.$user_row[2].'</td>
                            <td>'.$user_row[3].'</td>
                            <td>'.$user_row[4].'</td>
                            <td><img src="profileimage/'.$user_row[5].'" width="50px" height="50px" alt=""></td>
                            <td>'.$user_row[6].'</td>
                            <td>
                                <a href="" class="btn btn-primary">Block</a>
                            </td>
                        </tr>
                    ';
                }
            ?>
        </tbody>
    </table>
</body>
</html>