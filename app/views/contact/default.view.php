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
</div> -->
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
            <a class="navbar-brand" href="/index/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>">
                QR <i class="fas fa-qrcode"></i>
            </a>
            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars "></i></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" data-scroll href="/index/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="Home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/flowcode/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" >qR Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/about/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/product/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="product">product</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/blog/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="blog" role="button">
                            blog
                        </a>
                    </li>
                    </li>
                    <li class="nav-item activeitemall">
                        <a class="nav-link hvr-bounce-in " data-scroll href="/contact/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="contact">contact</a>
                    </li>

                    <?php
                    if (isset($_SESSION['name']))
                    {?>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in " data-scroll href="/profile/default/<?=$this->_params[0] ?>" data-value="profile">Profile</a>
                    </li>
                </ul>
                <?php }else{?>
                    </ul>
                    <span class="form-navbar">
            <a href="/signIn" class="log">login</a>
            <a href="/signup" class="link_butt">sign up</a>
        </span>
                <?php }
                ?>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- ========================================================== -->
    <!-- Start Slider -->
    <div class="slider_contact">
        <div class="overlayall">
            <h1>contact us</h1>
        </div>
        <div class="navall">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Slider -->
</header>
<!-- ================================================= -->
<!-- End Header -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Services -->
<div class="Services_contact">
    <h2 class="head">Services</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="fas fa-layer-group"></i>
                    <div class="section_text">
                        <a href="#">getting started with QR code tech pRO</a>
                        <p>find out everything you need to know about QR codes here.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>17 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="far fa-edit"></i>
                    <div class="section_text">
                        <a href="#">Designing Your QR Codes</a>
                        <p>Explore the design features to make your QR Codes unique.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>12 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="fas fa-user-friends"></i>
                    <div class="section_text">
                        <a href="#">Managing Your QR Codes</a>
                        <p>Edit, pause, and organize your QR Codes easily.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>10 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="fas fa-folder-open"></i>
                    <div class="section_text">
                        <a href="#">Tracking Your QR Codes</a>
                        <p>Learn what data can you acquire and how.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>23 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="fas fa-cogs"></i>
                    <div class="section_text">
                        <a href="#">Setting Up Your Account</a>
                        <p>Get to know our pricing, terms, and billing.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>23 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Services_contact_section">
                    <i class="fas fa-check"></i>
                    <div class="section_text">
                        <a href="#">14-Day Free Trial</a>
                        <p>Your first 14 days are on us! Learn more.</p>
                        <hr>
                        <div class="section_title">
                            <a href="/blog"> <i class="fas fa-qrcode"></i></a>
                            <div class="section_title_article">
                                <h6>23 articles in this collection</h6>
                                <p>written by <span>QR Code Tech pRO</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Services -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Git in Touch -->
<div class="touch_contact">
    <h2 class="head">get in touch</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="touch_form">
                    <form action="/contact/add" method="post">
                        <div class="form-group">
                            <p style="color: green">
                                <?php
                                    if (isset($_SESSION['connect_send']))
                                    {
                                        echo $_SESSION['connect_send'];
                                        $_SESSION['connect_send'] = " ";
                                    }

                                ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="FirstName">Name</label>
                            <i class="fas fa-star"></i>
                            <input type="text" class="form-control" id="FirstName" name="name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <i class="fas fa-star"></i>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <i class="fas fa-star"></i>
                            <textarea class="form-control" id="Message" rows="8" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" name="submit">
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 touch_img">
                <img src="/imgs/touch.png" title="Git In Touch">
            </div>
        </div>
    </div>
</div>
<!-- End Section Git in Touch -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Mapp -->
<div class="container">
    <div class="map_contact">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=computer%20science%20and%20information%20collage,mansoura%20university&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://putlocker-is.org">putlocker</a><br><style>
                </style><a href="https://www.embedgooglemap.net">embed map in gmail</a><style>
                </style></div></div>
    </div>
</div>
<!-- Start Section Mapp -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Get Connected -->
<div class="container">
    <div class="links_contact_all">
        <h2 class="head">Get Connected </h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="img_contact">
                    <img src="/imgs/connectUs.png">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="links_contact">
                    <a href="http://www.google.com">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="http://www.google.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://www.google.com">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="http://www.google.com">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Get Connected -->
<!-- ========================================================== -->
<!--  -->
<!-- Start Section color_boxtwo -->
<div class="color_boxtwo">
    <div class="container">
        <div class="color_box">
            <h3> Follow our company updates , plus all-things <span> QR Codes</span> </h3>
            <p>Stay up to date with current QR Code news and trends , Jumpstart your day with everything you need to know about QR Codes.</p>
            <a href="/signup" class="link_butt">
                create free account
            </a>
        </div>
    </div>
</div>
<!-- End Section color_boxtwo -->
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
                            marketing campaigns with trackable QR Codes???designed by you.</p>
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