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
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in"data-scroll href="/about/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="About">About</a>
                    </li>
                    <li class="nav-item activeitemall">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/product/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="product">product</a>
                    </li>

                    <li class="nav-item">
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
    <div class="slider_product">
        <div class="overlayall">
            <h1>Product</h1>
        </div>
        <div class="navall">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Slider -->
</header>
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Two_Slider_Blue -->
<div class="Two_Slider_Blue">
    <div class="btndown" data-value="foor">
        <i class="fas fa-angle-double-down"></i></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 first">
                <h2>Bring your QR Code ideas to life</h2>
                <p>Adding QR Codes to any visuals and campaigns has
                    never been easier. Choose from a variety of solutions with full customization.</p>
                <a class="link_butt">
                    sign up now
                </a>
            </div>
            <div class="col-md-6 col-xs-12 last">
                <img src="/imgs/product/slider_two.png">
            </div>
        </div>
    </div>
</div>
<!-- End Section Two_Slider_Blue -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Three_Blogs_Product -->
<div class="Three_Blogs_Product">
    <div class="one_product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 first">
                    <h5>QR CODE TYPES</h5>
                    <h2>Next-gen QR Codes</h2>
                    <p>Finally, there???s a way to create a QR Code without having a website. Our QR Codes have built-in landing
                        pages designed to be displayed beautifully across any device.</p>
                    <a href="#">learn more</a>
                </div>
                <div class="col-md-6 col-xs-12 last">
                    <img src="/imgs/product/one_product.png">
                </div>
            </div>
        </div>
    </div>
    <div class="two_product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 last">
                    <img src="/imgs/product/two-product.png">
                </div>
                <div class="col-md-6 col-xs-12 first">
                    <h5>QR CODE CUSTOMIZATION</h5>
                    <h2>More than just black and white</h2>
                    <p>Show off your company logo and colors on your QR Codes and attract more scans with call-to-action
                        frames. No design knowledge needed. Promise.</p>
                    <a href="#">GET INSPIRED</a>
                </div>
            </div>
        </div>
    </div>
    <div class="three_product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 first">
                    <h5>QR CODE STATISTICS</h5>
                    <h2>Actionable insights at your fingertips</h2>
                    <p>Measure your QR Code campaign???s success as it happens. Track where and how many people scan
                        your Codes then export the data into shareable CSV reports.</p>
                    <a href="#">learn more</a>
                </div>
                <div class="col-md-6 col-xs-12 last">
                    <img src="/imgs/product/three-product.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Three_Blogs_Product -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Product_sales -->
<div class="Product_sales">
    <h2 class="head">
        qRcodes can be used across <span>hundreds of verticals</span>
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Education</h3>
                    <p>
                        Join the top institutions who are using qRcode
                        to directly and magically connect people with information
                    </p>
                    <img src="/imgs/product/product_sales1.webp">
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Real Estate</h3>
                    <p>
                        QR Codes provides an instant connection point from your marketing to
                        listing information,
                        property details, virtual tours, and more
                    </p>
                    <img src="/imgs/product/product_sales2.webp">
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Restaurants</h3>
                    <p>
                        Join the top restaurants who are
                        using Flowcode to keep customers safe with contactless dining
                    </p>
                    <img src="/imgs/product/product_sales3.webp">
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Television</h3>
                    <p>
                        The only QR platform designed for TV, CTV and digital video,
                        Our experts provide placement templates that drive attention.
                    </p>
                    <img src="/imgs/product/product_sales4.webp">
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Packaging</h3>
                    <p>
                        Place a Flowcode on your packaging to help customers find your brand on social media,
                        drive sales, or go to any digital destination.
                    </p>
                    <img src="/imgs/product/product_sales5.webp">
                </div>
            </div>
            <div class="col-md-6 col-xd-12">
                <div class="Product_sales_section">
                    <h3>Retail</h3>
                    <p>
                        Aside from the clear benefits of giving more information to potential customers, there is
                        also a nice design aesthetic to using Flowcodes.
                    </p>
                    <img src="/imgs/product/product_sales6.webp">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Product_sales -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Questions -->
<div class="Questions_product">
    <h2 class="head">FAQ?</h2>
    <div class="container questionalll">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    what is a qR code?
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                QR Code is a two-dimensional version of the barcode, typically made up of black and white pixel patterns. Denso Wave, a Japanese subsidiary of the Toyota supplier Denso, developed them for marking components in order to accelerate logistics processes for their automobile production. Now, it has found its way into mobile marketing with the widespread adoption of smartphones. "QR" stands for "Quick Response",
                                which refers to the instant access to the information hidden in the Code.  </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    what are the benefits of using of qR codes?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                They are gaining popularity because of their versatility. You can use them to gather feedback to improve your products or services, increase customer engagement with images or videos, or even promote your business
                                via events and coupons. All of these can be done with just a single scan! </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    how do i scan qR codes?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Depending on your device, you might already have a built-in QR Code reader or scanner. Open the camera app on your mobile phone and hold it over a Code for a few seconds until a notification pops up. If this doesn???t happen, check your settings and see if QR Code scanning is enabled. Still not working? Don???t worry, all you have
                                to do now is install third-party QR Code readers from your app stores.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapsefour"
                                        aria-expanded="false" aria-controls="collapsefour">
                                    are qR codes free?
                                </button>
                            </h2>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                All of our Static QR Codes are free. This includes URL, vCard, Plain text, Email, SMS, Twitter, WiFi, and Bitcoin. Once created, they are yours forever. The only drawback with these types is that you won???t be able to edit
                                the content, so be sure to always test and make sure they work before printing.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapsefive"
                                        aria-expanded="false" aria-controls="collapsefour">
                                    what kind of information can be stored in a qR code?
                                </button>
                            </h2>
                        </div>
                        <div id="collapsefive" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                AQR Codes are so versatile, they are able to store a variety of information depending on your needs. It can store a URL to make it easier for you to open a page on the web with just a scan. It can also store contact details so that you don???t have to manually type the name, phone number, and email address to save it to your phone. But of
                                course, this is just the tip of the iceberg; you can view more use cases here.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="Questions_img">
                    <img src="/imgs/product/FAQ.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Questions -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Slider_footer -->
<div class="Slider_footer" id="foor">
    <div class="Slider_footer_overlay">
        <h5>CUSTOMER SUPPORT</h5>
        <h2>Help when you need it most</h2>
        <p>Reach us however you want ??? chat, phone, email ??? we???ve got your back.
            Prefer even quicker help? Our help center is open 24/7, accessible anywhere.</p>
    </div>
    <img src="/imgs/product/Slider_footer.png">
</div>
<!-- End Section Slider_footer -->
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