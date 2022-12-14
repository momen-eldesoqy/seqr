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
    <!--------------- Owl Carousel ----------------->
    <link rel="stylesheet" href="/css/librarues/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/librarues/owl.theme.default.min.css">
    <!--------------- Goolgle Fonts ----------------->
    <!-- <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap"
     rel="stylesheet"> -->
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
    <!-- Start Scroll And Links -->
    <div class="Header_links">
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
        <a href="http://www.google.com"><i class="fab fa-github"></i></a>
        <a href="http://www.google.com"><i class="fab fa-google"></i></a>
    </div>
    <!-- ========================================================== -->
    <div class="Header_scroll" data-value="About">
        <h5>scroll</h5>
        <i class="fas fa-long-arrow-alt-down"></i>
    </div>
    <!-- End Scroll And Links -->



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
                    <li class="nav-item activeitem">
                        <a class="nav-link" data-scroll href="/index/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/flowcode/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" >qR Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/about/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" >about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/product/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>"
                        >product</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in " data-scroll href="/contact/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>">contact</a>
                    </li>

                    <li class="nav-item">
                        <a data-scroll href="/blog/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" class="nav-link hvr-bounce-in">Blog</a>
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
    <div class="container slider">
        <div class="row">
            <div class="col-md-6 col-xs-12 content">
                <h6>welcome</h6>
                <h1><span>products</span> are rocking <br>
                    QR codes with us</h1>
                <div class="iconPara">
                    <p>
    <span class="spanslider"> <svg xmlns="http://www.w3.org/2000/svg" fill="#1E95F3"
                                   width="20" height="20" viewBox="0 0 24 24">
      <path d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861
       5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z"/></svg></span>
                        Easy and quick access to the destination. </p>
                    <p>
        <span class="spanslider"> <svg xmlns="http://www.w3.org/2000/svg" fill="#1E95F3"
                                       width="20" height="20" viewBox="0 0 24 24">
          <path d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861
           5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z"/></svg></span>
                        Safe personal things of users from lost. </p>
                    <p>
      <span class="spanslider"> <svg xmlns="http://www.w3.org/2000/svg" fill="#1E95F3"
                                     width="20" height="20" viewBox="0 0 24 24">
        <path d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861
          5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z"/></svg></span>

                        Free Instant download. </p>
                </div>
                <div class="last_content">
                    <a href="/signup" class="link_butt">
                        join now
                    </a>
                    <span data-toggle="modal" data-target="#exampleModal"></span>
                    <span> play video</span>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 img-slider">
                <img src="/imgs/slider.jpg">
                <h3>quick qR scan</h3>
                <h4>your All-In-One QR code marketing platform.</h4>

            </div>
        </div>
    </div>
    <!-- End Slider -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><br>
                    <video controls preload="none" width="100%" height="100%" poster="">
                        <source src="/???????? ???????????? ?????????? ?????????? ( ???? ???????? ???????? ???????? ) ???????? ???????? ?????????????? - ?????????? ???????? ???????????? - YouTube.mkv"
                                type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ================================================= -->
<!-- ================================================= -->
<!-- End Header -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Home -->
<div class="About_index" id="About">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="about_info_text">
                    <h2 class="head"><span>about</span> us</h2>
                    <p>Egoditor Was Founded In 2021 By Team In Computer Science and Information Collage
                        , Mansoura University. They Both Saw The True Potential Of
                        QR Codes When It Was Still Under The Radar.
                    </p>
                    <hr>
                    <p>Add Editable And Trackable QR Codes On Anything You Want With Full Branding And Customization Features.,
                        But When Became Obvious, QR-Code-Tech.
                        Com Was Already Miles Ahead.</p>
                    <a class="link_butt"  href="http://www.google.com">
                        sign up
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="about_info_img">
                    <img src="/imgs/aboutpage/aboutt_info.png" title="About_Info">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Home -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Blog -->
<div class="blog" id="blog">
    <h2 class="head">blog </h2>
    <div class="container">
        <div class="row">
            <!-- ========================================================== -->
            <div class="col-md-4 col-xs-12 Blog_section" >
                <div class="card">
                    <div class="imgcard"><img src="/imgs/blog/blog1.jpg" class="card-img-top">
                        <div class="over"></div></div>
                    <div class="card-body mt-2">
                        <h6>Trending</h6>
                        <h5>The small river named Duden flows by their place and supplies </h5>
                        <a href="/blog" class="linkmore">
                            more <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ========================================================== -->
            <div class="col-md-4 col-xs-12 Blog_section">
                <div class="card">
                    <div class="imgcard"><img src="/imgs/blog/blog3.jpg" class="card-img-top">
                        <div class="over"></div></div>
                    <div class="card-body mt-2 crdbd3">
                        <h6>Trending</h6>
                        <h5>5 Common Legal Mistakes That Can Trip-Up Your Startup </h5>
                        <a href="/blog" class="linkmore">
                            more <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ========================================================== -->
            <div class="col-md-4 col-xs-12 Blog_section">
                <div class="card">
                    <div class="imgcard"><img src="/imgs/blog/blog2.png"card-img-top">
                        <div class="over"></div></div>
                    <div class="card-body mt-2 crdbd2">
                        <h6>Trending</h6>
                        <h5>To Grow Your Business Start Focusing on Your Employees </h5>
                        <a href="/blog" class="linkmore">
                            more <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ========================================================== -->
        </div>
    </div>
</div>
<!-- End Section Blog -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- End Section Flowcode -->
<div class="flowcodeall">
    <div class="container">
        <h2 class="head">creating your <span>qR code</span></h2>
        <p>flowcode instantly connects the offline world to the online world using the lastest in qR technology</p>
        <div class="Flowcode">
            <div class="Flowcode_img">
                <img title="Flowcode_img1" src="/imgs/aboutpage/flowcode.png">
            </div>
            <div class="Flowcode_img">
                <img title="Flowcode_img2" src="/imgs/aboutpage/flowcode3.png">
            </div>
            <div class="Flowcode_img">
                <img title="Flowcode_img3" src="/imgs/aboutpage/flowcode2.png">
            </div>
            <div class="Flowcode_img">
                <img title="Flowcode_img4" src="/imgs/aboutpage/flowcode4.png">
            </div>
            <div class="Flowcode_img">
                <img title="Flowcode_img5" src="/imgs/aboutpage/flowcode5.png">
            </div>
        </div>
        <a class="link_butt"  href="http://www.google.com">
            create qRcode
        </a>
    </div>
</div>
<!-- End Section Flowcode -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section How To -->
<div class="How_To_Flowcodeindex">
    <h2 class="head">how to Create <span>QR Code</span></h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-img flowone">
                    <img src="/imgs/qr Page/one.svg">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-text">
                    <h3><span>select</span> which type</h3>
                    <p>You may choose from URL, vCard, Plain
                        Text, Email, SMS, Twitter, WiFi, and Bitcoin.
                        However, these free QR Codes are not editable and trackable.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-text">
                    <h3><span>Fill</span> in the details</h3>
                    <p>Enter all the information needed in the fields that appear. This could be a link, contact information,
                        text or any other type of info. Once you???re done, select ???Generate.???
                        .</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-img flowtwo">
                    <img src="/imgs/qr Page/two.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-img flowthree">
                    <img src="/imgs/qr Page/three.png">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="flowcode-section-text">
                    <h3><span>Download</span> the QR Code</h3>
                    <p>You may choose to have a standard black and white design or choose colors and
                        frames to help you attract more scans. If not, proceed to download your finished Code.</div>
            </div>
        </div>
    </div>
    <a href="/flowcode" class="link_butt">
        create flowCode
    </a>
</div>
<!-- End Section How To -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Team -->
<div class="Team" id="team">
    <div class="container">
        <h2 class="head">Our <span>team</span></h2>
        <div class="Team_content owl-carousel owl-theme">
            <div class="Team_section">
                <div class="Team_section_img">
                    <div class="team_overlay">
                    </div>
                    <img src="/imgs/team/zizo.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>abdelrahman elziady</h3>
                    <p>Frontend Developer/UI Designer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/alaa.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>alaa ali</h3>
                    <p>Mobile Developer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/,oamen.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>Moamen ElDesoky</h3>
                    <p>Backend Developer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/hammad.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>abdelrahman hammad</h3>
                    <p>Research</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/ali.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>ali elnagy</h3>
                    <p>Mobile Developer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/essam.jpg" >
                </div>
                <div class="Team_section_text">
                    <h3>essam ahmed</h3>
                    <p>UI/UX Designer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/karim.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>karim elsayed</h3>
                    <p>Research</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>
            <div class="Team_section">
                <div class="Team_section_img">
                    <img src="/imgs/team/sawi.jpg">
                </div>
                <div class="Team_section_text">
                    <h3>mohammed elsawi</h3>
                    <p>UI/UX Designer</p>
                    <span>
        <a href="http://www.google.com"><i class="fab fa-facebook-f"></i></a>
        <a href="http://www.google.com"><i class="fab fa-twitter"></i></a>
          <a href="http://www.google.com"><i class="fab fa-instagram"></i></a>
       </span>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Section Team -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Product_sales -->
<div class="Index_Product_sales" id="Products">
    <h2 class="head">
        qRcodes can be used across <span>hundreds of verticals</span>
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Packaging</h3>
                    <img src="/imgs/product/product_sales5.webp">
                    <a href="/product">
                        Learn More Packaging
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Retail</h3>
                    <img src="/imgs/product/product_sales6.webp">
                    <a href="/product">
                        Learn More Retail
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Education</h3>
                    <img src="/imgs/product/product_sales1.webp">
                    <a href="/product">
                        Learn More Education
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Real Estate</h3>
                    <img src="/imgs/product/product_sales2.webp">
                    <a href="/product">
                        Learn More Real Estate
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Restaurants</h3>
                    <img src="/imgs/product/product_sales3.webp">
                    <a href="/product">
                        Learn More Real Estate
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Television</h3>
                    <img src="/imgs/product/product_sales4.webp">
                    <a href="/product">
                        Learn More Television
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Product_sales -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section color_boxtwo -->
<div class="color_boxtwo">
    <div class="container">
        <div class="color_box">
            <h3>unlock more cool<span> qR code features</span></h3>
            <p>Add Editable And Trackable QR Codes On Anything You Want With Full Branding And Customization Features.</p>
            <a href="/signup" class="link_butt">
                create free account
            </a>
        </div>
    </div>
</div>
<!-- End Section color_boxtwo -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Get Connected -->
<div class="container" id="connectUs">
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
<!-- ========================================================== -->
<!-- Start Section Mapp -->
<div class="container" >
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
<!-- End Section Mapp -->
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
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/js/qr.js"></script>
</body>
</html>