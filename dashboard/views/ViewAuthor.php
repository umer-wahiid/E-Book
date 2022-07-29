<?php
include("../apis/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.dataTables.min.css" />
    <style>
        .navbar .navbar-nav .nav-link.dash,
        .cat,
        .pro {
            color: var(--light);
            background: none;
            border-color: transparent;
        }

        .navbar .navbar-nav .nav-link.bra {
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }
    </style>
    <title>Document</title>
</head>

<body>
    <h1>Author List</h1>
    <table id="mytable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Author Name</th>
                <th>Author About</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $fetch_author = mysqli_query($con, "SELECT * FROM `tbl_book_author`");
            while ($row = mysqli_fetch_array($fetch_author)) {
                echo '
                    <tr>
                        <td>' . $row[0] . '</td>
                        <td>' . $row[1] . '</td>
                        <td>' . $row[2] . '</td>
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
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#mytable").DataTable();
        });
    </script>




</body>

</html>