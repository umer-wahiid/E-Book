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

    .td .form-control {
        font-weight: bolder;
        color: #27ae60;
        border: 1px solid #27ae60;
    }

    .td .form-control:hover {
        background-color: #27ae60;
        font-weight: bolder;
        color: white;
    }

    .navbar .navbar-nav .nav-link.dash {
        color: var(--light);
        background: none;
        border-color: transparent;
    }

    .navbar .navbar-nav .nav-link.cat {
        color: var(--primary);
        background: var(--dark);
        border-color: var(--primary);
    }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>Add New Category</h1>
        </center>
        <form action="../apis/book_apis/add_category.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b> Category Name</b></td>
                    <td><input type="text" required name="txtcategory" placeholder="Category Name"
                            class="form-control input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Category" name="btn"
                            class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>




</body>

</html>