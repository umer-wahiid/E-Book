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
    <div class="container">
        <center>
            <h1>Add New Book</h1>
        </center>
        <form method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b>Book Title</b></td>
                    <td><input type="text" required name="btitle" placeholder="Book Title" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Publisher</b></td>
                    <td><input type="text" required name="bpublisher" placeholder="Book Price" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Publication Date</b></td>
                    <td><input type="date" required name="bdate" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Weight</b></td>
                    <td><input type="number" required name="bweight" placeholder="Book Weight" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Pages</b></td>
                    <td><input type="number" required name="bpages" placeholder="Book Pages" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Rating</b></td>
                    <td><input type="number" required name="brating" placeholder="Book Rating" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Availability</b></td>
                    <td><input type="text" required name="bavailaibility" placeholder="Book Availaibility" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book About</b></td>
                    <td><textarea name="babout" placeholder="Book About" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td><b>Book Price HardCopy</b></td>
                    <td><input type="number" required name="bhardcopy" placeholder="Book Price HardCopy" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price PDFS</b></td>
                    <td><input type="number" required name="bpdf" placeholder="Book Price PDFS" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price CD</b></td>
                    <td><input type="number" required name="bcd" placeholder="Book Price CD" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Category_1</b></td>
                    <td>
                        <select name="bcategory1" class="form-control input" id="">
                            <?php
                                $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                                while($row_cat = mysqli_fetch_array($fetch_cat)) {
                                    echo '<option value='.$row_cat[0].'>'.$row_cat[1].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Book Category_2</b></td>
                    <td>
                        <select name="bcategory2" class="form-control input" id="">
                            <?php
                                $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                                while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                    echo '<option value='.$row_cat[0].'>'.$row_cat[1].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Book Category_3</b></td>
                    <td>
                        <select name="bcategory3" class="form-control input" id="">
                            <?php
                                $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                                while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                    echo '<option value='.$row_cat[0].'>'.$row_cat[1].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td><b>Select Book Author</b></td>
                    <td><input type="text" required name="bauthor" placeholder="Book Author" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Select Book Author_About</b></td>
                    <td><textarea name="bauthor_about" placeholder="Book Author About" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td><b>Select Book Image</b></td>
                    <td><input type="file" name="bimage" class="form-control input"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Book" name="adsproduct" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>

    <!-- // if(isset($_POST['adsproduct'])){

    //     $title = mysqli_real_escape_string($con, $_POST['btitle']);
    //     $publisher = mysqli_real_escape_string($con, $_POST["bpublisher"]);
    //     $publicationDate = mysqli_real_escape_string($con, $_POST["bdate"]);
    //     $weight = mysqli_real_escape_string($con, $_POST["bweight"]);
    //     $pages = mysqli_real_escape_string($con, $_POST["bpages"]);
    //     $rating = mysqli_real_escape_string($con, $_POST["brating"]);
    //     $availability = mysqli_real_escape_string($con, $_POST["bavailaibility"]);
    //     $about = mysqli_real_escape_string($con, $_POST["babout"]);
    //     $hardCopy = mysqli_real_escape_string($con, $_POST["bhardcopy"]);
    //     $pdfs = mysqli_real_escape_string($con, $_POST["bpdf"]);
    //     $cd = mysqli_real_escape_string($con, $_POST["bcd"]);
    //     $category_1 = mysqli_real_escape_string($con, $_POST["bcategory1"]);
    //     $category_2 = mysqli_real_escape_string($con, $_POST["bcategory2"]);
    //     $category_3 = mysqli_real_escape_string($con, $_POST["bcategory3"]);
    //     $author_name = mysqli_real_escape_string($con, $_POST["bauthor"]);
    //     $author_about = mysqli_real_escape_string($con, $_POST["bauthor_about"]);

    //     $unique = uniqid();

    //     $bimage_path = "../book_image/".$unique.basename($_FILES['bimage']['name']);
    //     $bimage = "../apis/book_image/".$unique.basename($_FILES['bimage']['name']);
    //     $tmp_location = $_FILES['bimage']['tmp_name'];

    //     move_uploaded_file($tmp_location, $bimage_path);
        
        

    //     if ($query > 0) {
    //         echo '<h1>Book Added</h1>';
    //     } else {
    //         echo '<h1>Invalid Error</h1>';
    //     }
    // } -->
    
    </div>
</body>

</html>