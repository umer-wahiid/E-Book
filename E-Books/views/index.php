<?php

    require '../apis/connection.php';

    if(isset($_GET['alert'])){
        $alert = $_GET['alert'];
        echo '<div class="alert alert-success" role="alert">'.$alert.'</div>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- short icon link -->
    <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">

    <!-- bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#home" class="logo"> <i class="fas fa-book"></i> e-books </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="../apis/user_apis/logout_user.php" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <!-- <a href="#blogs">blogs</a> -->
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#contact" class="fa fa-phone"></a>
        <a href="#about" class="fa fa-blog"></a>
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
            <input type="submit" name="login" value="sign in" class="btn">
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
            <input type="submit" name="submit" value="submit" class="btn">
            <p>Already have an account ? <button id="login-btn">Sign in</button></p>
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>upto 75% off</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias
                    sit necessitatibus, aliquid ex minima at!</p>
                <a href="#" class="btn">shop now</a>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over $100</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100 secure payment</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>10 days returns</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 support</h3>
                <p>call us anytime</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>featured books</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">

        <form action="">
            <h3>subscribe for latest updates</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="submit" value="subscribe" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>new arrivals</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                quaerat at fuga dolorum natus velit.</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="image/deal-img.jpg" alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>client's reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                        at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- reviews section ends -->

    <!-- blogs section starts  -->

    <!-- <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- blogs section ends -->


    <!-- about section starts -->
    <h1 class="heading" style="margin-bottom: 50px;"> <span>About Us</span> </h1>

    <div class="about-section" id="about">
        <div class="inner-container">
            <h1>About</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
                eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi
                neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>
    <!-- about section ends -->

     <!-- contact form starts -->

     <h1 class="heading" style="margin-bottom: 50px; margin-top: 70px;"> <span>Contact Us</span> </h1>

     <section class="contact" id="contact">

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>
                            Block 6 Saddar Bazar Road,<br>Shop No. 7899 Streat No. 43,<br>Saddar Karachi.
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>
                        e.bookstore@ebooks.com
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>
                        +92-317-0100122
                        </p>
                    </div>
                </div>

            </div>

            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>

                </form>
            </div>

        </div>

    </section>

    <!-- contact form ends -->


    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Karachi </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Lahore </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Faisalabad </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Islamabad </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Gujranwala </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Quetta </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +92-320-9257811 </a>
                <a href="#"> <i class="fas fa-phone"></i> +92-315-1113099 </a>
                <a href="#"> <i class="fas fa-phone"></i> +92-332-2862017 </a>
                <a href="#"> <i class="fas fa-envelope"></i> e.bookstore@ebooks.com </a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> Copyright © 2022 <span>E-Books</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->
<!--
    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div> -->
















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>
