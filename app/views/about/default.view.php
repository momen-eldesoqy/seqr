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
                    <li class="nav-item ">
                        <a class="nav-link" data-scroll href="/index/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="Home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/flowcode/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" >qR Code</a>
                    </li>
                    <li class="nav-item activeitemall">
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
                    <li class="nav-item">
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
    <div class="slider_about">
        <div class="overlayall">
            <h1>about us</h1>
        </div>
        <div class="navall">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
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
<div class="Services_about">
    <div class="container">
        <h4 class="serv_box">
            <span>new</span>
            QR Code creation built into your application
        </h4>
        <h3 class="serv_content">
            <span>pro tip</span>
            <span>scroll down to see</span>
            <span>creative qR codes ideas</span>
        </h3>
        <div class="serv_section">
            <div class="card">
                <img class="img-card-top" src="/imgs/aboutpage/buss (1).jpg">
                <h4>business cards</h4>
            </div>
            <div class="card">
                <img class="img-card-top" src="/imgs/aboutpage/buss (2).png">
                <h4>flyers</h4>
            </div>
            <div class="card">
                <img class="img-card-top" src="/imgs/aboutpage/buss (1).jpg">
                <h4>business cards</h4>
            </div>
            <div class="card lastt">
                <h5>check out more
                    <br>
                    <span>creative</span> qR
                    <br> code examples
                </h5>
                <a href="#"> view more <i class="fas fa-angle-right"></i></a>
            </div>

        </div>
    </div>
</div>
<!-- End Section Services -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section about_info -->
<div class="about_info">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="about_info_text">
                    <h2 class="head">about us</h2>
                    <p>Egoditor Was Founded In 2021 By Team In Computer Science and Information Collage
                        , Mansoura University. They Both Saw The True Potential Of
                        QR Codes When It Was Still Under The Radar.
                    </p>
                    <hr>
                    <p>Add Editable And Trackable QR Codes On Anything You Want With Full Branding And Customization Features.,
                        But When Became Obvious, QR-Code-Tech.
                        Com Was Already Miles Ahead.</p>
                    <a class="link_butt"  href="http://www.google.com">
                        create flowcode
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
<!-- End Section about_info -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Flowcode -->
<div class="flowcodeall">
    <div class="container">
        <h2 class="head">creating your qR code</h2>
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
<!-- Start Section choose_us -->
<div class="choose_us" id="choose">
    <div class="choose_us_img">
        <img src="/imgs/blue1.jpg" title="Why Choose Us">
    </div>
    <div class="choose_us_content">
        <h2>why choose us</h2>
        <div>
            <p>You want results. We have found that the best way to get them is with up front research ??? of your company, competitors, target market and customer psychographics.
                Only after we fully understand you and your customers, do we recommend a plan of attack.<hr>
            <p>
                We bring our diverse background of advertising,
                design, branding, public relations, research and strategic planning
                to work for your company. Not only will your materials look great ??? they will get results.</div>
        <a href="signup.html" class="link_butt">
            join now
        </a>
    </div>
</div>
<!-- Start Section choose_us -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section color_boxone -->
<div class="color_boxone">
    <div class="container">
        <div class="color_box">
            <h3>instantly make your <span>materials better</span></h3>
            <p>Add Editable And Trackable QR Codes On Anything You Want With Full Branding And Customization Features.</p>
            <a href="signup.html" class="link_butt">
                create free account
            </a>
        </div>
    </div>
</div>
<!-- End Section color_boxone -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!--  -->
<!-- Start Section qr_type -->
<div class="qr_type">
    <div class="container">
        <h2 class="head">What Type Of QR Codes Can I Create For Free?</h2>
        <p>
            We Offer These Static QR Codes That Are Completely For Free And Will Never Expire. Once
            Generated, It???s Yours Forever But You Will Not Be Able To Edit The Content Or Track Its
            Scans.
        </p>
        <div class="qr_type_content">
            <div class="qr_type_section">
                <span><i class="fas fa-link"></i> <h4>url</h4></span>
                <hr>
                <h5>use this type to open a link on a webpage , conatct form
                    , or youtube
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fas fa-id-card"></i> <h4>vCard</h4></span>
                <hr>
                <h5>Use this type to create a digital business card with save to phone feature.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="far fa-file-alt"></i> <h4>plain text</h4></span>   <hr>
                <h5>Use this type to display text in any language, of up to 300 characters.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fas fa-sms"></i> <h4>sMS</h4></span>   <hr>
                <h5>Use this type to send a predefined text message to any phone number.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fas fa-paper-plane"></i> <h4>email</h4></span>   <hr>
                <h5>Use this type to send an email with a predefined message to any email address.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fas fa-wifi"></i> <h4>wiFi</h4></span>   <hr>
                <h5>Use this type to connect to a WiFi network without typing the password.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fab fa-twitter"></i> <h4>twitter</h4></span>   <hr>
                <h5>Use this type to post a tweet, complete with a link and hashtags.
                </h5>
            </div>
            <div class="qr_type_section">
                <span><i class="fab fa-bitcoin"></i> <h4>bitcoin</h4></span>   <hr>
                <h5>Use this type to request crypto payments from major cryptocurrencies.
                </h5>
            </div>
        </div>
    </div>
</div>
<!-- End Section qr_type -->
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
<!-- ========================================================== -->
<!--  -->
<!-- Start Section color_boxtwo -->
<div class="color_boxtwo">
    <div class="container">
        <div class="color_box">
            <h3>unlock more cool<span> qR code features</span></h3>
            <p>Add Editable And Trackable QR Codes On Anything You Want With Full Branding And Customization Features.</p>
            <a href="signup.html" class="link_butt">
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
        <a href="signup.html" class="link_butt">
            sign up now
        </a>
    </div>

    <div class="footer_dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="foot wow fadeInLeft" data-wow-delay=".1s" data-wow-offset="100">
                        <a class="navbar-brand" href="index.html">
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
                                <a href="index.html"><i class="fas fa-angle-right"></i>Home</a>
                                <a href="about.html"><i class="fas fa-angle-right"></i>About</a>
                                <a href="blog.html"><i class="fas fa-angle-right"></i>Blog</a>
                                <a href="contact.html"><i class="fas fa-angle-right"></i>Contact</a>
                                <a href="product.html"><i class="fas fa-angle-right"></i>Products</a>
                            </ul>
                            <ul class="list-unstyled">
                                <a href="flowcode.html"><i class="fas fa-angle-right"></i>QR Code</a>
                                <a href="signup.html"><i class="fas fa-angle-right"></i>Sign Up</a>
                                <a href="signIn.html"><i class="fas fa-angle-right"></i>Sign In</a>
                                <a href="contact.html"><i class="fas fa-angle-right"></i>Contact</a>
                                <a href="about.html"><i class="fas fa-angle-right"></i>About</a>
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
                            <a href="signup.html" class="link_butt">
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