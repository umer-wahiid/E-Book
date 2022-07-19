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
        .input{
            border: 1px solid red;
        }
        .td .form-control{
            background-color: black;
            font-weight: bolder;
            color: red;
            border: 1px solid red;
        }
        .td .form-control:hover{
            background-color: red;
            font-weight: bolder;
            color: black;
        }
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
    <div class="container">
        <center>
            <h1>Add New Category</h1>
        </center>
          <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b> Category Name</b></td>
                    <td><input type="text" required name="txtcategory" placeholder="Category Name" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b> Category Image</b></td>
                    <td><input type="file" required name="catimage" style="background-color:black;" class="form-control input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Category" name="btn" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST["txtcategory"])){
                $toGetCategoryName = $_POST["txtcategory"];
                $toGetCategoryImage = $_FILES["catimage"]["name"];
                $tmplocation = $_FILES["catimage"]["tmp_name"];

                move_uploaded_file($tmplocation,"cimagefolder/".$toGetCategoryImage);

                $query = mysqli_query($con,"insert into category(cname,cimage) values ('$toGetCategoryName','$toGetCategoryImage')");

                if($query>0){
                    echo "<h1>Category Added</h1>";
                }
                else{
                    echo "<h1>Invalid Error</h1>";
                }
            }
        ?>
    </div>
</body>
</html>