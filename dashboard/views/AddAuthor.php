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
        .input {
            border: 1px solid #27ae60;
        }

        textarea {
            resize: none;
        }

        .td .form-control {
            background-color: white;
            font-weight: bolder;
            color: #27ae60;
            border: 1px solid #27ae60;
        }

        .td .form-control:hover {
            background-color: #27ae60;
            font-weight: bolder;
            color: white;
        }

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
</head>

<body>
    <div class="container">
        <center>
            <h1>Add New Author</h1>
        </center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b> Author Name</b></td>
                    <td><input type="text" required name="authorname" placeholder="Author Name" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b> Author About</b></td>
                    <td><textarea name="authorabout" placeholder="Author About" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Author" name="btn" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST["btn"])) {

            $toGetAuthorName = $_POST["authorname"];
            $toGetAuthorAbout = $_POST["authorabout"];

            $query = mysqli_query($con, "INSERT INTO `tbl_book_author`(`author_name`, `author_about`) 
            VALUES ('$toGetAuthorName','$toGetAuthorAbout')");

            if ($query > 0) {
                echo '<h1>Author Added</h1>';
            } else {
                echo '<h1>Invalid Error</h1>';
            }
        }
        ?>
    </div>
</body>

</html>