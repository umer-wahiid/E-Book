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
    <!-- <div class="container">
        <center>
            <h1>Add New Book</h1>
        </center>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b>Book Title</b></td>
                    <td><input type="text" required name="bname" placeholder="Book Title" class="form-control input"></td>
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
                    <td><input type="text" required name="bweight" placeholder="Book Weight" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Pages</b></td>
                    <td><input type="text" required name="bpages" placeholder="Book Pages" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Rating</b></td>
                    <td><input type="text" required name="brating" placeholder="Book Rating" class="form-control input"></td>
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
                    <td><input type="text" required name="bhardcopy" placeholder="Book Price HardCopy" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price PDFS</b></td>
                    <td><input type="text" required name="bpdf" placeholder="Book Price PDFS" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price CD</b></td>
                    <td><input type="text" required name="bcd" placeholder="Book Price CD" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Select Book Category_1</b></td>
                    <td><select name="bcategory1" class="form-control input" id="">
                            <?php

                            $fetch_cat = mysqli_query($con, "SELECT * FROM `tbl_book_category");

                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[1] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                <tr>
                    <td><b>Select Book Category_2</b></td>
                    <td><select name="bcategory2" class="form-control input" id="">
                            <?php

                            $fetch_cat = mysqli_query($con, "SELECT * FROM `tbl_book_category");

                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[2] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                <tr>
                    <td><b>Select Book Category_3</b></td>
                    <td><select name="bcategory3" class="form-control input" id="">
                            <?php

                            $fetch_cat = mysqli_query($con, "SELECT * FROM `tbl_book_category");

                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[3] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Select Book Author</b></td>
                    <td><select name="bauthor" class="form-control input" id="">
                            <?php

                            $fetch_author = mysqli_query($con, "SELECT * FROM `tbl_book_author`");

                            while ($row_author = mysqli_fetch_array($fetch_author)) {
                                echo '<option value=' . $row_author[0] . '>' . $row_author[1] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Select Book Author_About</b></td>
                    <td><select name="bauthor_about" class="form-control input" id="">
                            <?php

                            $fetch_author = mysqli_query($con, "SELECT * FROM `tbl_book_author`");

                            while ($row_author = mysqli_fetch_array($fetch_author)) {
                                echo '<option value=' . $row_author[0] . '>' . $row_author[2] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Select Book Image</b></td>
                    <td><input type="file" name="bimage" class="form-control input" multiple accept="image/*"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="td"><input type="submit" value="Add Book" name="btn" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST["btn"])) {
            $togetBookTitle = $_POST["bname"];
            $togetBookPublisher = $_POST["bpublisher"];
            $togetBookPublicationDate = $_POST["bdate"];
            $togetBookWeight = $_POST["bweight"];
            $togetBookPages = $_POST["bpages"];
            $togetBookRating = $_POST["brating"];
            $togetBookAvailability = $_POST["bavailaibility"];
            $togetBookAbout = $_POST["babout"];
            $togetBookHardCopy = $_POST["bhardcopy"];
            $togetBookPDFS = $_POST["bpdf"];
            $togetBookCD = $_POST["bcd"];
            $togetCategory_1 = $_POST["bcategory1"];
            $togetCategory_2 = $_POST["bcategory2"];
            $togetCategory_3 = $_POST["bcategory3"];
            $togetAuthor = $_POST["bauthor"];
            $togetAuthor_About = $_POST["bauthor_about"];
            $toGetImage = $_FILES["bimage"]["name"];
            $tmp_location = $_FILES["bimage"]["tmp_name"];

            move_uploaded_file($tmp_location, "../../E-Books/views/image/" . $toGetImage);

            $query = mysqli_query($con, "INSERT INTO `tbl_book_detail`(`book_title`, `book_author`, `book_author_about`, `book_publisher`, `book_publication_date`, `book_weight`, `book_pages`, `book_rating`, `book_availability`, `book_about`, `book_category_1`, `book_category_2`, `book_category_3`, `book_price_hardcopy`, `book_price_pdf`, `book_price_cd`, `book_image`) 
            VALUES ('$togetBookTitle'.'$togetBookPublisher','$togetBookPublicationDate','$togetBookWeight','$togetBookPages','$togetBookRating','$togetBookAvailability','$togetBookAbout','$togetBookHardCopy','$togetBookPDFS','$togetBookCD','$togetCategory_1','$togetCategory_2','$togetCategory_3','$togetAuthor','$togetAuthor_About','$toGetImage')");

            if ($query > 0) {
                echo '<h1>Book Added</h1>';
            } else {
                echo '<h1>Invalid Error</h1>';
            }
        }
        ?> -->
    </div>
</body>

</html>