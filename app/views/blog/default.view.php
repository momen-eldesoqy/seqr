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
                    <li class="nav-item">
                        <a class="nav-link hvr-bounce-in" data-scroll href="/product/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="product">product</a>
                    </li>

                    <li class="nav-item activeitemall">
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
    <div class="slider_blog">
        <div class="overlayall">
            <h1>blog</h1>
        </div>
        <div class="navall">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
<!-- Start Section Blog -->
<div class="Services_blog">
    <div class="container">
        <div class="row blog_contact">
            <div class="col-lg-8 col-md-12 blog_contact_one">
                <div class="firstblog1 wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="200">
                    <div class="blog_img">
                        <img src="/imgs/blog/blog-header (2).png" class="w-100 img-fluid">
                    </div>
                    <a href="#">How Teachers Are Using QR Codes In The Classroom To Enhance Learning</a>
                    <span>
      by <span>John Doe  </span> In <span> Technology  </span> Jan 10, 2020  <span> | 10 Comments</span>
      </span>
                    <p>Despite the unfortunate fact that the airline industry is at a near standstill
                        due to the coronavirus pandemic, there are methods that airlines and other travel-related companies can use to inform and continue to communicate with customers safely. QR Codes work perfectly because they enable contactless transactions
                        and information transfers in a variety of ways.... <a href="#">Read More</a></p>
                    <hr>
                </div>
                <div class="firstblog1 wow bounceInleft" data-wow-delay=".3s" data-wow-offset="200">
                    <img src="/imgs/blog/instgram3.jpeg" class="w-100 img-fluid">
                    <a href="#">How to Use a Batch QR Code Generator to Make Multiple QR Codes?</a>
                    <span>
by <span>Sara Peter  </span> In <span> Technology  </span> Oct 10, 2018  <span> | 39 Comments</span>
</span>
                    <p>Despite the unfortunate fact that the airline industry is at a near standstill
                        due to the coronavirus pandemic, there are methods that airlines and other travel-related companies can use to inform and continue to communicate with customers safely. QR Codes work perfectly because they enable contactless transactions
                        and information transfers in a variety of ways.... <a href="#">Read More</a></p>
                    <hr>
                </div>
                <div class="firstblog1 wow bounceInleft" data-wow-delay=".3s" data-wow-offset="200">
                    <img src="/imgs/blog/blog-header (3).png" class="w-100 img-fluid">
                    <a href="#">From Fast-Food To Gaming, These Are Trending QR Code Campaigns Right Now.</a>
                    <span>
by <span>Sadio Faren   </span> In <span> Technology  </span> Feb 12, 2011  <span> | 23 Comments</span>
</span>
                    <p>Despite the unfortunate fact that the airline industry is at a near standstill
                        due to the coronavirus pandemic, there are methods that airlines and other travel-related companies can use to inform and continue to communicate with customers safely. QR Codes work perfectly because they enable contactless transactions
                        and information transfers in a variety of ways.... <a href="#">Read More</a></p>
                    <hr></div>
                <hr class="hhrr">
                <div class="firstblog1 wow bounceInleft" data-wow-delay=".3s" data-wow-offset="200">
                    <img src="/imgs/blog/blog-header (4).png" class="w-100 img-fluid">
                    <a href="#">How QR Codes Propel the Music Industry Forward</a>
                    <span>
by <span>Gamila Gisu </span> In <span> QR Code  </span> Jan 20, 2015   <span> | 18 Comments</span>
</span>
                    <p>Despite the unfortunate fact that the airline industry is at a near standstill
                        due to the coronavirus pandemic, there are methods that airlines and other travel-related companies can use to inform and continue to communicate with customers safely. QR Codes work perfectly because they enable contactless transactions
                        and information transfers in a variety of ways.... <a href="#">Read More</a></p>
                    <hr></div>
                <div class="firstblog1 wow bounceInleft" data-wow-delay=".3s" data-wow-offset="200">
                    <img src="/imgs/blog/blog-header (5).png" class="w-100 img-fluid">
                    <a href="#">What is the Difference between an RFID Tag and a QR Code?</a>
                    <span>
        by <span>Mohammed Ali </span> In <span> Covid 19 </span> June 13, 2021   <span> | 27 Comments</span>
        </span>
                    <p>While both an RFID tag and a QR Code are used for product inventory management, the technology behind their functionality differs heavily. This article gives an overview
                        of how they both work, what they???re used for, and how to scan them..... <a href="#">Read More</a></p>
                    <hr></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="secondblog1 wow bounceInDown" data-wow-delay=".2s" data-wow-offset="100">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link activepage" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 blog_contact_two">
                <div class="row">
                    <div class="firstblog2 col-lg-12  col-md-6 wow bounceInRight" data-wow-delay=".1s" data-wow-offset="100">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <hr>

                        <h4>CATEGORIES</h4>
                        <hr>
                        <ul class="list-unstyled">
                            <a>Best Particles (12)</a>
                            <a>COVID-19  (5)</a>
                            <a>Products Particles  (21)</a>
                            <a>Technology (15)</a>
                            <a>Business (22)</a>
                        </ul>
                        <hr>
                    </div>
                    <hr>
                    <div class="secondblog2 col-lg-12  col-md-6 ">
                        <h4>RECENT POST</h4>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div class="media wow bounceInUp" data-wow-offset="100">
                                    <img src="/imgs/blog/article1.jpeg" alt="...">
                                    <div class="media-body">
                                        <a href="#">How Teachers Are Using QR Codes
                                            To Enhance Learning </a>
                                        <h6>March 10, 2018</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow bounceInUp" data-wow-delay=".1s" data-wow-offset="100">
                                    <img src="/imgs/blog/article2.jpeg" alt="...">
                                    <div class="media-body">
                                        <a href="#">How to speed your computer</a>
                                        <h6>Jan 13, 2017</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow bounceInUp" data-wow-delay=".1s" data-wow-offset="100">
                                    <img src="/imgs/blog/article3.jpeg" alt="...">
                                    <div class="media-body">
                                        <a href="#">How Teachers Are Using QR Codes
                                            To Enhance Learning </a>
                                        <h6>Feb 30, 2014</h6>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media wow bounceInUp" data-wow-delay=".2s" data-wow-offset="100">
                                    <img src="/imgs/blog/article4.jpeg" alt="...">
                                    <div class="media-body">
                                        <a href="#">How to start building your own computer</a>
                                            <h6>Nov 03, 2018</h6>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <hr >
                    </div>

                    <div class="thblog2 col-sm-12 ">
                        <h4>INSTAGRAM GALLERY</h4>
                        <hr>
                        <div class="row gallery">
                            <div class="col-sm-12">
                                <img src="/imgs/blog/instgram1.jpeg" class="wow bounceInLeft" data-wow-offset="100">
                                <img src="/imgs/blog/instgram2.jpeg" class="wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100">
                                <img src="/imgs/blog/instgram3.jpeg" class="wow bounceInLeft" data-wow-delay=".3s" data-wow-offset="100">
                            </div>
                            <div class="col-sm-12">
                                <img src="/imgs/blog/instgram4.jpeg" class="wow bounceInLeft" data-wow-offset="100">
                                <img src="/imgs/blog/instgram5.jpeg" class="wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100">
                                <img src="/imgs/blog/instgram6.jpeg" class="wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100">
                            </div>
                            <div class="col-sm-12">
                                <img src="/imgs/blog/blog1.jpg" class="wow bounceInLeft" data-wow-offset="100">
                                <img src="/imgs/blog/blog2.png" class="wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100">
                                <img src="/imgs/blog/blog3.jpg" class="wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100">
                            </div>

                        </div>
                    </div>
                    <div class="forblog2 col-md-12 col-sm-6">
                        <hr>
                        <h4>SOCIAL BIO</h4>
                        <hr>
                        <div class="link_blog">
                            <a href="#">
                                <i class="fab fa-facebook-f wow bounceInLeft" data-wow-offset="100"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in wow bounceInLeft" data-wow-delay=".2s" data-wow-offset="100"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram wow bounceInUp" data-wow-delay=".2s" data-wow-offset="100"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter wow bounceInRight" data-wow-offset="100"></i>
                            </a>
                        </div>
                    </div>
                    <div class="fiveblog2 col-md-12 col-sm-6 ">
                        <hr class="hhrr">
                        <h4>POPULAR TAGS</h4>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12 tags_blog wow bounceInRight" data-wow-delay=".2s" data-wow-offset="100">
                                <a href="#">Tech</a>
                                <a href="#">QR</a>
                                <a href="#">Mobile</a>
                                <a href="#">Product</a>
                                <a href="#">Dots</a>
                                <a href="#"> Digital Device</a>
                                <a href="#">Codes</a>
                                <a href="#">Contact</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Blog -->
<!-- ========================================================== -->
<!-- Start Section color_boxone -->
<div class="color_boxone">
    <div class="container">
        <div class="color_box">
            <h3>Bring your <span>QR Code ideas </span> to life</h3>
            <p>Adding QR Codes to any visuals has easier.
                Choose from a variety of solutions with full customization.
            </p>
            <a href="/signup" class="link_butt">
                create free account
            </a>
        </div>
    </div>
</div>
<!-- End Section color_boxone -->
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