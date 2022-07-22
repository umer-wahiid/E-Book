<?php
include "../apis/connection.php";
session_start();
if (isset($_SESSION["userid"]) == null) {
    header("location:index.php");
} else {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/animate.css">
    <script src="JAVASCRIPT/jquerry.js"></script>
    <script src="JAVASCRIPT/wow.min.js"></script>
    <script src="CSS/fontawesome-free-6.0.0-beta3-web/js/all.min.js"></script>
    <script src="CSS/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="JAVASCRIPT/javaScript.js"></script>
    <link rel="stylesheet" href="CSS/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/fontawesome-free-6.0.0-beta3-web/css/fontawesome.min.css">
    <link rel="shortcut icon" type="image/png" href="IMAGES/SHORTCUT 2.png">
    <title>Edit Profile - E-Book</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- short icon link -->
    <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">

    <!-- bootstrap 5 css link -->
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <STYLE>
        .main-header{
            margin-top: 0px;
        }
        .cat-card {
            width: 260px;
            height: 230px;
            box-shadow: 1px 1px 5px black;
        }
        .brand-item .col-lg-3 {
            margin-top: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </STYLE>
</head>

<body>
    <?php
include "nav.php"
    ?>

        <h1 class="heading" style="margin-top: 50px;"><span>Edit Your Profile</span></h1>
        <div class="container categories-brand">
            <div class="row">
                <div class="col-8">
                <form style="width: 700px;" action="../apis/user_apis/edit_user.php" method="POST" enctype="multipart/form-data">
                    <table class="table" style="margin-top: 90px; width: 113vh; font-size: 15px; margin-left: -100px;">
                        <?php
if (isset($_SESSION["userid"]) != null) {
        echo '
                        <tr>
                            <th>Name :</th>
                            <td><input type="text" name="txtname" value="' . $_SESSION["name"] . '" class="form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="txtemail" value="' . $_SESSION["email"] . '" class="form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                        <tr>
                            <th>Contact :</th>
                            <td><input type="text" name="txtcontact" value="' . $_SESSION["contact"] . '" class="form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                        <tr>
                            <th>Address :</th>
                            <td><input type="text" name="txtaddress" value="' . $_SESSION["address"] . '" class="form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                        <tr>
                            <th>Picture :</th>
                            <td><input type="file" name="txtimage" class="form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn-edit" class="btn btn-success form-control" style="height: 5vh; font-size:15px;"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-3">
                <img src="' . $_SESSION["image"] . '" class="rounded-circle" style="width:350px;height:350px;margin-top:50px;" alt="">
            </div>
        </div>
    </div>
    ';
    }
    ?>





    <?php
include "footer.php";
    ?>




    <script>
        new WOW().init();
    </script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
<?php
}
?>