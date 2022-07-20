<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <header class="header">

        <div class="header-1">

            <a href="index.php" class="logo"> <i class="fas fa-book"></i> e-books </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
                <div class="fas nui online" onclick="settingsMenuToggle()">
                <img  src="image/Ammar.jpg">
                </div>
            </div>
            
        </div>

        <!----------- settings-menu---------------  -->

        <div class="sm">

            <div id="drk-bnt">
                <span></span>
            </div>

            <div class="smi">
                <div class="up">
                    <img src="image/Ammar.jpg">
                    <div>
                        <p>Ammar Ansari</p>
                        <a href="#">See Your Profile</a>
                    </div>
                </div>
                <hr>
                <div class="sl">
                    <img src="image/setting.png" class="si">
                    <a href="#">Settings & Privacy <img src="image/arrow.png"
                            width="10px"></a>
                </div>
                <div class="sl">
                    <img src="image/help.png" class="si">
                    <a href="#">Help & Support <img src="image/arrow.png" width="10px"></a>
                </div>
                <div class="sl">
                    <img src="image/logout.png" class="si">
                    <a href="../apis/user_apis/logout_user.php">Logout <img src="image/arrow.png" width="10px"></a>
                </div>
            </div>
        </div>

        

        <div class="header-2">
            <nav class="navbar-n">
                <a href="index.php">home</a>
                <a href="#bestselling">Best Selling</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <!-- <a href="#blogs">blogs</a> -->
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="">competition</a>
            </nav>
        </div>

        </header>

        <!-- header section ends -->

        <!-- bottom navbar  -->

        <nav class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <a href="#bestselling" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="contact.php" class="fa fa-phone"></a>
        <a href="about.php" class="fa fa-blog"></a>
        </nav>



    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="../apis/user_apis/login_user.php" method="POST">
            <h3>sign in</h3>
            <span>Email</span>
            <input type="email" name="vemail" class="box" placeholder="Enter your email" id="">
            <span>password</span>
            <input type="password" name="vpassword" class="box" placeholder="Enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" name="login" value="sign in" class="btn-n">
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <button id="signup-btn">create one</button></p>
        </form>

    </div>



    <!-- Register form  -->


    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form action="../apis/user_apis/insert_user.php" method="POST" enctype="multipart/form-data">
            <h3>sign up</h3>
            <span>User Name</span>
            <input type="text" name="uname" class="box" placeholder="Enter your name" id="">
            <span>Email</span>
            <input type="email" name="uemail" class="box" placeholder="Enter your email" id="">
            <span>Phone</span>
            <input type="text" name="uphone" class="box" placeholder="Enter your phone" id="">
            <span>Address</span>
            <textarea style="border:1px solid gray;border-radius:6px ; resize: none; color: var(--light-color);" placeholder="Enter your address" name="uaddress" id="" cols="52" rows="3"></textarea>
            <span>password</span>
            <input type="password" name="upassword" class="box" placeholder="Enter your password" id="">
            <input type="submit" name="submit" value="submit" class="btn-n">
            <p>Already have an account ? <button id="login-btn">Sign in</button></p>
        </form>

    </div>

</body>
</html>
