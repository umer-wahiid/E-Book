    <?php

    session_start();
    require "../connection.php";

    $user_id = $_SESSION['userid'];

    if (isset($_POST["add_to_cart"])) {

        $book_id = $_POST['book_id'];
        $book_name = $_POST['book_name'];
        $book_price = $_POST['book_price'];
        $book_image = $_POST['book_image'];
        // $book_quantitiy = $_POST['book_quantitiy'];

        // $check_cart_numbers = mysqli_query($con, "SELECT * FROM `tbl_book_cart` WHERE cart_name = '$book_name'") or die('query failed');

        // if (mysqli_num_rows($check_cart_numbers) > 0) {
            // $message[] = 'already added to cart!';
        // } else 
        // {
        $query_e = mysqli_query($con, "INSERT INTO `tbl_cart`(`cart_user_id`, `cart_book_id`, `cart_book_name`, `cart_book_image`, `cart_book_price`, `cart_book_quantity`) VALUES ('$user_id','$book_id','$book_name','$book_image','$book_price','2')");
        //  or die('query failed');
            // $message[] = 'product added to cart!';
        // }
    }
    ?>