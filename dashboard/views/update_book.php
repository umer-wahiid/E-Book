<?php
include("../apis/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
            <h1>Update Book</h1>
        </center>
        <form action="../apis/book_apis/edit_book.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td><b>Book Title</b></td>
                    <td><input type="text" required name="utitle" placeholder="Book Title" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Publisher</b></td>
                    <td><input type="text" required name="upublisher" placeholder="Book Publisher" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Publication Date</b></td>
                    <td><input type="date" required name="udate" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Weight</b></td>
                    <td><input type="number" required name="uweight" placeholder="Book Weight" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Pages</b></td>
                    <td><input type="number" required name="upages" placeholder="Book Pages" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Rating</b></td>
                    <td><input type="text" required name="urating" placeholder="Book Rating" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Availability</b></td>
                    <td><input type="text" required name="uavailaibility" placeholder="Book Availaibility" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book About</b></td>
                    <td><textarea name="uabout" placeholder="Book About" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td><b>Book Price HardCopy</b></td>
                    <td><input type="number" required name="uhardcopy" placeholder="Book Price HardCopy" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price PDFS</b></td>
                    <td><input type="number" required name="updf" placeholder="Book Price PDFS" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Price CD</b></td>
                    <td><input type="number" required name="ucd" placeholder="Book Price CD" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Book Category_1</b></td>
                    <td>
                        <select name="ucategory1" class="form-control input" id="">
                            <?php
                            $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[1] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Book Category_2</b></td>
                    <td>
                        <select name="ucategory2" class="form-control input" id="">
                            <?php
                            $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[1] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Book Category_3</b></td>
                    <td>
                        <select name="ucategory3" class="form-control input" id="">
                            <?php
                            $fetch_cat = mysqli_query($con, "SELECT * FROM tbl_book_category");
                            while ($row_cat = mysqli_fetch_array($fetch_cat)) {
                                echo '<option value=' . $row_cat[0] . '>' . $row_cat[1] . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Author</b></td>
                    <td><input type="text" required name="uauthor" placeholder="Book Author" class="form-control input"></td>
                </tr>
                <tr>
                    <td><b>Author_About</b></td>
                    <td><textarea name="uauthor_about" placeholder="Book Author About" class="form-control input"></textarea></td>
                </tr>
                <tr>
                    <td><b>Image</b></td>
                    <td><input type="file" name="uimage" class="form-control input"></td>
                </tr>
                <tr><td>
                    </td>
                    <td><a href="../apis/book_apis/edit_book.php?iid=<?=$_GET['id']?>" ></a></td>
                    <td class="td"><input type="submit" value="Update Book" name="updatebook" class="form-control submit btn btn-outline-secondary"></td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>