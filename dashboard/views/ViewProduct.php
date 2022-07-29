<?php
include("../apis/connection.php");
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
        .cat {
            color: var(--light);
            background: none;
            border-color: transparent;
        }

        .navbar .navbar-nav .nav-link.pro {
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
                <th>Book Title</th>
                <th>Book Publisher</th>
                <th>Book Publication Date</th>
                <th>Book Weight</th>
                <th>Book Pages</th>
                <th>Book Ratings</th>
                <th>Book Availablitity</th>
                <th>Book About</th>
                <th>Book Price HardCopy</th>
                <th>Book Price PDFS</th>
                <th>Book Price CD</th>
                <th>Book Category_1</th>
                <th>Book Category_2</th>
                <th>Book Category_3</th>
                <th>Book Author</th>
                <th>Book Author About</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fetch_book = mysqli_query($con, 'SELECT * from tbl_book_detail
                INNER JOIN tbl_book_category
                ON
                tbl_book_detail.book_category_1 = tbl_book_category.b_id
                INNER JOIN tbl_book_author
                ON
                tbl_book_detail.book_author = tbl_book_author.author_id
                ');
            while ($row = mysqli_fetch_array($fetch_book)) {
                echo '
                        <tr>
                            <td>' . $row[0] . '</td>
                            <td>' . $row[1] . '</td>
                            <td>' . $row[4] . '</td>
                            <td>' . $row[5] . '</td>
                            <td>' . $row[6] . '</td>
                            <td>' . $row[7] . '</td>
                            <td>' . $row[8] . '</td>
                            <td>' . $row[9] . '</td>
                            <td>' . $row[10] . '</td>
                            <td>' . $row[11] . '</td>
                            <td>' . $row[12] . '</td>
                            <td>' . $row[13] . '</td>
                            <td>' . $row[14] . '</td>
                            <td>' . $row[15] . '</td>
                            <td>' . $row[16] . '</td>
                            <td><img src="pimagefolder/' . $row[17] . '" width="50px" height="50px" alt=""></td>
                            <td>' . $row[2] . '</td>
                            <td>' . $row[3] . '</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
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