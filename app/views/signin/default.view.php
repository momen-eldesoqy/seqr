<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="refresh" content="400">
    <meta name="author" content="Abdo ELZiady , Moamen ElDesoky, Amr ">
    <meta name="description" content="Create QR Website">
    <meta name="keywords" content="Css3,Html5,Bootstrap5, js ,jquery ,Sass">
    <!--------------- Viewport Mobiles ----------------->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--------------- Normalize ----------------->
    <link rel="stylesheet" href="/css/normalize.css">
    <!--------------- FOntawesome ----------------->
    <link rel="stylesheet" href="/css/all.min.css">
    <!--------------- Bootstrap ----------------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--------------- Main File Css ----------------->
    <link rel="stylesheet" href="/css/style.css">
    <title>QRTech Project Gradution</title>
    <!--------------- Script JS ----------------->
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <!--------------- Favicon Image ----------------->
    <link rel="icon" href="/imgs/favicon.png" type="image/png">
    <!--------------- Goolgle Fonts ----------------->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Loader
<div class="loader-wrapper">
    <div class="lds-ripple"><div></div><div></div></div>
</div>-->
<!-- End Loader -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Scroll  -->
<button type="button" href="#" class="topbtn">
    <i class="fa fa-chevron-up"></i>
</button>
<!-- End Scroll  -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Header -->
<header class="header">
    <!-- ========================================================== -->
    <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                QR <i class="fas fa-qrcode"></i>
            </a>
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars "></i></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/" data-value="Home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/flowcode" >qR Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/about" data-value="About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/product" data-value="product">product</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/blog" data-value="blog" role="button">
                            blog
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in " data-scroll href="/contact" data-value="contact">contact</a>
                    </li>
                </ul>
                <span class="form-navbar">
                        <a href="/signIn" class="log activenav">login
                        </a>
                        <a href="/signup" class="link_butt">
                          sign up
                        </a>
                       </span>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- ========================================================== -->
</header>
<!-- ================================================= -->
<!-- End Header -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Slider -->
<div class="slider_signin">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 content">
                <div class="img_signin">
                    <img src="/imgs/signin.png">
                </div>
                <div class="content_signin">
                    <div class="card">
                        <div class="card-body">
                            <h3>Get your <span>Free</span> account</h3>
                            <h5>Subscription in less than 30 seconds.</h5>
                            <form method="post" action="/signin/authentication">
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i>
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <span class="spaneffect"></span>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <i class="fas fa-eye"></i>
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" id="pass" aria-describedby="emailHelp" name="password">
                                    <span class="spaneffect"></span>
                                    <small style="color: red " id="emailHelp" class="form-text ">
                                        <?php
                                            if (isset($_SESSION['error_login']))
                                            {
                                                echo $_SESSION['error_login'];
                                                $_SESSION['error_login'] = '';
                                            }
                                        ?>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="login" name="login">
                                </div>

                             <!--   <button type="submit" class="rounded-0">
                                    <svg><rect/></svg>
                                    Submit</button> -->
                            </form>


                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Slider -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Footer -->
<footer class="footer">
    <div class="footer_light">
        <h4>become a QR code pro</h4>
        <h6>
            variety of QR code solutions with full customization, tracking and more.
        </h6>
        <a href="/signup" class="link_butt">
            sign up now
        </a>
    </div>

    <div class="footer_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="foot wow fadeInLeft" data-wow-delay=".1s" data-wow-offset="100">
                        <a class="navbar-brand" href="/">
                            QR <i class="fas fa-qrcode"></i> <span>Tech</span>
                        </a>

                        <p>QR Code Generator lets you create memorable
                            marketing campaigns with trackable QR Codes—designed by you.</p>
                        <h3>Made with <i class="fas fa-heart"></i> in Computer Science And Information
                            Collage , University Mansoura.</h3>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 ">
                    <div class="foot2 text-left wow fadeInDown" data-wow-delay=".2s" data-wow-offset="200">
                        <h4>Helpful Links</h4>

                        <div class="ulll">
                            <ul class="list-unstyled">
                                <a href="/"><i class="fas fa-angle-right"></i>Home</a>
                                <a href="/about"><i class="fas fa-angle-right"></i>About</a>
                                <a href="/blog"><i class="fas fa-angle-right"></i>Blog</a>
                                <a href="/contact"><i class="fas fa-angle-right"></i>Contact</a>
                                <a href="/product"><i class="fas fa-angle-right"></i>Products</a>
                            </ul>
                            <ul class="list-unstyled">
                                <a href="/flowcode"><i class="fas fa-angle-right"></i>QR Code</a>
                                <a href="/signup"><i class="fas fa-angle-right"></i>Sign Up</a>
                                <a href="/signIn"><i class="fas fa-angle-right"></i>Sign In</a>
                                <a href="/contact"><i class="fas fa-angle-right"></i>Contact</a>
                                <a href="/about"><i class="fas fa-angle-right"></i>About</a>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 ">
                    <div class="foot3 text-left wow fadeInRight" data-wow-delay=".3s" data-wow-offset="200">
                        <h4>Contact Us</h4>
                        <div class="linksfoot3">
                            <h3><span><i class="fas fa-map-marker-alt"></i></span> ManSoura University, Egypt</h3>
                            <h3><span><i class="fas fa-phone-alt"></i></span> Phone : +012-12345678</h3>
                            <h3><span><i class="fas fa-envelope"></i></span> Email : <span>Team@gmail.com</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 ">
                    <div class="foot4 text-left wow fadeInDown" data-wow-delay=".4s" data-wow-offset="200">
                        <h4>Subscribe</h4>

                        <p>Be always updated with our new offers and News</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email">
                            </div>
                            <a href="/signup" class="link_butt">
                                Subscribe
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="container foottttlast">
            <div class="row text-center fo">
                <div class="col-md">
                    <h6 class="font-weight-normal p-2">
                        COPYRIGHT &copy; 2021 <a href="#">QRTech</a> | ALL RIGHTS RESERVED.</h6>
                </div>
                <div class="col-md text-sm-right">
              <span class="spanfoot">
                <a href="http://www.google.com">
                 <i class="fab fa-facebook-f"></i></a>
                 <a href="http://www.google.com">
                    <i class="fab fa-twitter"></i>
                 </a>
                    <a href="http://www.google.com">
                 <i class="fab fa-github"></i>
                 </a>
                 <a href="http://www.google.com">
                   </i><i class="fab fa-google"></i>
                   </a>
                   </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Section Footer-->
<!-- ========================================================== -->
<!-- ========================================================== -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/qr.js"></script>
</body>
</html>