<?php
require "../apis/connection.php";
if (isset($_POST['update_order'])) {

    $order_update_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($con, "UPDATE `tbl_book_order` SET payment_status = '$update_payment' WHERE order_id = '$order_update_id'") or die('query failed');
    $message[] = 'payment status has been updated!';

    // $user_mail = $_POST['usermail'];
    // $user_name = $_POST['username'];
    // $to = $user_mail;
    // $from = "ebook@gmail.com";
    // $sub = "Confirmation Email";
    // $msg = "$user_name Your Order is Confirm! Thankyou For Shopping";

    // mail($to, $sub, $msg, $from);
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM `tbl_book_order` WHERE order_id = '$delete_id'") or die('query failed');
    header('location:order.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
            --purple: #27ae60;
            --red: #c0392b;
            --orange: #f39c12;
            --black: #333;
            --white: #fff;
            --light-color: #666;
            --light-white: #ccc;
            --light-bg: #f5f5f5;
            --border: .1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        .navbar .navbar-nav .nav-link.dash,
        .cat,
        .pro,
        .use,
        .cont,
        .revi .orde {
            color: var(--light);
            background: none;
            border-color: transparent;
        }

        .navbar .navbar-nav .nav-link.orde {
            color: var(--primary);
            background: var(--dark);
            border-color: var(--primary);
        }

        .orders .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, 30rem);
            justify-content: center;
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
            align-items: flex-start;
        }

        .orders .box-container .box {
            background-color: var(--white);
            padding: 2rem;
            border: var(--border);
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
            /* height: 70%; */
        }

        .orders .box-container .box p {
            padding-bottom: 1rem;
            font-size: 1rem;
            color: var(--light-color);
        }

        .orders .box-container .box p span {
            color: var(--purple);
        }

        .orders .box-container .box form {
            text-align: center;
        }

        .orders .box-container .box form select {
            border-radius: .5rem;
            margin: .5rem 0;
            width: 100%;
            background-color: var(--light-bg);
            border: var(--border);
            padding: 1.2rem 1.4rem;
            font-size: 1rem;
            color: var(--black);
        }
    </style>
</head>

<body>
    <section class="orders">

        <h1 class="title">Placed Orders</h1>

        <div class="box-container">
            <?php
            $select_orders = mysqli_query($con, "SELECT * FROM `tbl_book_order`") or die('query failed');
            if (mysqli_num_rows($select_orders) > 0) {
                while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
            ?>
                    <div class="box">
                        <p> user id : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
                        <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                        <p> name : <span><?php echo $fetch_orders['user_name']; ?></span> </p>
                        <p> number : <span><?php echo $fetch_orders['user_number']; ?></span> </p>
                        <p> email : <span><?php echo $fetch_orders['user_email']; ?></span> </p>
                        <p> address : <span><?php echo $fetch_orders['user_address']; ?></span> </p>
                        <p> total products : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                        <p> total price : <span>Rs. <?php echo $fetch_orders['total_price']; ?></span> </p>
                        <p> payment method : <span><?php echo $fetch_orders['order_method']; ?></span> </p>
                        <form action="" method="post">
                            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['order_id']; ?>">
                            <input type="hidden" name="usermail" value="<?php echo $fetch_orders['user_email']; ?>">
                            <input type="hidden" name="username" value="<?php echo $fetch_orders['user_name']; ?>">
                            <select name="update_payment">
                                <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
                                <option value="In Process">In Process</option>
                                <option value="completed">completed</option>
                            </select>
                            <input type="submit" value="update" name="update_order" class="btn btn-primary">
                            <a href="order.php?delete=<?php echo $fetch_orders['order_id']; ?>" onclick="return confirm('delete this order?');" class="btn btn-danger">delete</a>
                        </form>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">no orders placed yet!</p>';
            }
            ?>
        </div>

    </section>




</body>

</html>