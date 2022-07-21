<?php
    include("../apis/connection.php");
    session_start();
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
    <title>Youros Sports</title>

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
    </STYLE>
</head>

<body>
    <?php
        include ("nav.php")
    ?>

        <div class="container categories-brand">
            <div class="row">
                <div class="col-8"> 
                <form style="width: 400px;" action="" method="POST" enctype="multipart/form-data">
                    <table class="table">
                        <?php
                        // $fetch_user = mysqli_query($con,'SELECT * FROM user where uid = $_SESSION["userid"]');
                        // $row = mysqli_fetch_array($fetch_user);
                        if(isset($_SESSION["userid"])!=null){
                        echo '
                        <tr>
                            <th>Name :</th>
                            <td>'.$_SESSION["name"].'</td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td>'.$_SESSION["email"].'</td>
                        </tr>
                        <tr>
                            <th>Contact :</th>
                            <td>'.$_SESSION["contact"].'</td>
                        </tr>
                        <tr>
                            <th>Address :</th>
                            <td>'.$_SESSION["address"].'</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><a href="edit.php" class="form-control btn btn-success" value="Edit Profile">Edit Profile</a></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-3">
                <img src="image/Ammar.jpg" class="rounded-circle" style="width:270px;height:270px;" alt="">
            </div>
            ';
            }
            ?>
            </div>    
        </div>        
        




    <?php
        include ("footer.php");
    ?>




    <script>
        new WOW().init();
    </script>


    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>