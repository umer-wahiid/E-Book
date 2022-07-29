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
                    <td><b> Category_1</b></td>
                    <td><input type="text" required name="txtcategory1" placeholder="Category_1" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b> Category_2</b></td>
                    <td><input type="text" required name="txtcategory2" placeholder="Category_2" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b> Category_3</b></td>
                    <td><input type="text" required name="txtcategory3" placeholder="Category_3" class="form-control input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Category" name="btn" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>


    </div>

    <?php
    if (isset($_POST["btn"])) {
        $toGetCategory_1 = $_POST["txtcategory1"];
        $toGetCategory_2 = $_POST["txtcategory2"];
        $toGetCategory_3 = $_POST["txtcategory3"];

        $query = mysqli_query($con, "INSERT INTO `tbl_book_category`(`b_category_1`, `b_category_2`, `b_category_3`) 
        VALUES ('$toGetCategory_1'.'$toGetCategory_2','$toGetCategory_3')");

        if ($query > 0) {
            echo "<h1>Category Added</h1>";
        } else {
            echo "<h1>Invalid Error</h1>";
        }
    }
    ?>


</body>

</html>