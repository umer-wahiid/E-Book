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
        .navbar .navbar-nav .nav-link.dash,
        .cat,
        .pro,
        .use,
        .cont {
            color: var(--light);
            background: none;
            border-color: transparent;
        }

        .navbar .navbar-nav .nav-link.cont {
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }
    </style>
</head>

<body>
    <h1>User Reviews</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Stars</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fetch_review = mysqli_query($con, "SELECT * FROM `tbl_user_reviews`");
            while ($review_row = mysqli_fetch_array($fetch_review)) {
                echo '
                        <tr>
                            <td>' . $review_row[0] . '</td>
                            <td>' . $review_row[1] . '</td>
                            <td>' . $review_row[2] . '</td>
                            <td>' . $review_row[3] . '</td>
                            <td>' . $review_row[4] . '</td>
                            <td>' . $review_row[5] . '</td>
                            <td>
                                <a href="" class="btn btn-primary">Push</a>
                            </td>
                        </tr>
                    ';
            }
            ?>
        </tbody>
    </table>
</body>

</html>