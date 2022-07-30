    <?php

    include '../connection.php';

    if (isset($_POST['adsproduct'])) {

        $title = $_POST['btitle'];
        $publisher = $_POST["bpublisher"];
        $publicationDate = $_POST["bdate"];
        $weight = $_POST["bweight"];
        $pages = $_POST["bpages"];
        $rating = $_POST["brating"];
        $availability = $_POST["bavailaibility"];
        $about = $_POST["babout"];
        $hardCopy = $_POST["bhardcopy"];
        $pdfs = $_POST["bpdf"];
        $cd = $_POST["bcd"];
        $category_1 = $_POST["bcategory1"];
        $category_2 = $_POST["bcategory2"];
        $category_3 = $_POST["bcategory3"];
        $author_name = $_POST["bauthor"];
        $author_about = $_POST["bauthor_about"];

        $unique = uniqid();

        $bimage_path = "../book_image/" . $unique . basename($_FILES['bimage']['name']);
        $bimage = "../apis/book_image/" . $unique . basename($_FILES['bimage']['name']);
        $tmp_location = $_FILES['bimage']['tmp_name'];

        move_uploaded_file($tmp_location, $bimage_path);

        // $book_q = "INSERT INTO `tbl_book_detail`(`book_title`, `book_author`, `book_author_about`, `book_publisher`, `book_publication_date`, `book_weight`, `book_pages`, `book_rating`, `book_availability`, `book_about`, `book_category_1`, `book_category_2`, `book_category_3`, `book_price_hardcopy`, `book_price_pdf`, `book_price_cd`, `book_image`) VALUES ('$title','$author_name','$author_about','$publisher','$publicationDate','$weight','$pages','$rating','$availability','$about','$category_1','$category_2','$category_3','$hardCopy','$pdfs','$cd','$bimage')";


        $book_q = "INSERT INTO `tbl_book_detail`(`book_title`, `book_author`, `book_author_about`, `book_publisher`, `book_publication_date`, `book_weight`, `book_pages`, `book_rating`, `book_availability`, `book_about`, `book_category_1`, `book_category_2`, `book_category_3`, `book_price_hardcopy`, `book_price_pdf`, `book_price_cd`, `book_image`) VALUES ('$title','$author_name','$author_about','$publisher','$publicationDate','$weight','$pages','$rating','$availability','$about','$category_1','$category_2','$category_3','$hardCopy','$pdfs','$cd','$bimage')";

        $book_e = mysqli_query($con, $book_q);

        if ($book_e > 0) {
            header("location:../../views/index.php?viewproduct=Successfully Inserted");
        }
        else{
            header("location:../../views/index.php?viewproduct=Try Again");
        }
    }

    ?>