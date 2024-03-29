    <?php

    include '../connection.php';

    if (isset($_POST["updatebook"])) {
        $id = $_GET["iid"];
        $title = $_POST['utitle'];
        $publisher = $_POST["upublisher"];
        $publicationDate = $_POST["udate"];
        $weight = $_POST["uweight"];
        $pages = $_POST["upages"];
        $rating = $_POST["urating"];
        $availability = $_POST["uavailaibility"];
        $about = $_POST["uabout"];
        $hardCopy = $_POST["uhardcopy"];
        $pdfs = $_POST["updf"];
        $cd = $_POST["ucd"];
        $category_1 = $_POST["ucategory1"];
        $category_2 = $_POST["ucategory2"];
        $category_3 = $_POST["ucategory3"];
        $author_name = $_POST["uauthor"];
        $author_about = $_POST["uauthor_about"];

        $unique = uniqid();
        $allowed_types = array(
            'jpg',
            'jpeg',
            'png',
            'jfif'
        );
        $typecheck = pathinfo($bimage_path, PATHINFO_EXTENSION);
        if (in_array($typecheck, $allowed_types)){

        $uimage_path = "../book_image/" . $unique . basename($_FILES['uimage']['name']);
        $uimage = "../apis/book_image/" . $unique . basename($_FILES['uimage']['name']);
        $tmp_location = $_FILES['uimage']['tmp_name'];

        move_uploaded_file($tmp_location, $uimage_path);

        $update_q = "UPDATE `tbl_book_detail` SET `book_title`='$title',`book_author`='$author_name',`book_author_about`='$author_about',`book_publisher`='$publisher',`book_publication_date`='$publicationDate',`book_weight`='$weight',`book_pages`='$pages',`book_rating`='$rating',`book_availability`='$availability',`book_about`='$about',`book_category_1`='$category_1',`book_category_2`='$category_2',`book_category_3`='$category_3',`book_price_hardcopy`='$hardCopy',`book_price_pdf`='$pdfs',`book_price_cd`='$cd',`book_image`='$uimage' 
        WHERE `book_id`= '$id'";

        $update_e = mysqli_query($con, $update_q);

        if ($update_e) {
            header("location:../../views/ViewProduct.php");
        } else {
            header("location:../../views/ViewProduct.php?response=Try Again");
        }
    }
    else{
        header("location:../../views/ViewProduct.php?response=Try Again");
    }
    }
    ?>
