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
        select{
            background-color: black;
        }
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
    <div class="container">
        <center>
            <h1>Add New Product</h1>
        </center>
          <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b>Product Name</b></td>
                    <td><input type="text" required name="pname" placeholder="Product Name" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Product Price</b></td>
                    <td><input type="text" required name="pprice" placeholder="Product Price" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Product Description</b></td>
                    <td><textarea required name="pdescription" cols="30" rows="10" placeholder="Product Description" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td><b>Select Category</b></td>
                    <td><select name="pcategory" style="background-color:black;" class="form-control input" id="">
                            <?php
                                
                                $fetch_cat = mysqli_query($con,"select * from category");

                                while($row_cat = mysqli_fetch_array($fetch_cat)){
                                    echo '<option value='.$row_cat[0].'>'.$row_cat[1].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Select Brand</b></td>
                    <td><select name="pbrand" style="background-color:black;" class="form-control input" id="">
                            <?php

                                $fetch_brand = mysqli_query($con,"select * from brand");

                                while($row_brand = mysqli_fetch_array($fetch_brand)){
                                    echo '<option value='.$row_brand[0].'>'.$row_brand[1].'</option>';
                                }
                            ?>
                       </select>
                    </td>
                </tr>
                <tr>
                    <td>Select Image</td>
                    <td><input type="file" name="pimage" style="background-color:black;" class="form-control input" multiple accept="image/*"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Product" name="btn" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST["btn"])){
                $toGetName = $_POST["pname"];
                $toGetPrice = $_POST["pprice"];
                $toGetDescription = $_POST["pdescription"];
                $toGetCategory = $_POST["pcategory"];
                $toGetBrand = $_POST["pbrand"];
                $toGetImage = $_FILES["pimage"]["name"];
                $tmp_location = $_FILES["pimage"]["tmp_name"];

                move_uploaded_file($tmp_location,"pimagefolder/".$toGetImage);

                $query = mysqli_query($con,"insert into product(pname,pprice,pdesc,pcategory,pbrand,pimage) values ('$toGetName','$toGetPrice','$toGetDescription','$toGetCategory','$toGetBrand','$toGetImage')");

                if($query>0){
                    echo '<h1>Product Added</h1>';
                }
                else{
                    echo '<h1>Invalid Error</h1>';
                }
            }
        ?>
    </div>
</body>
</html>