<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="refresh" content="1000">
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
      <a class="navbar-brand" href="index.html">
    QR <i class="fas fa-qrcode"></i>
      </a>
      <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fas fa-bars "></i></span></button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
     <li class="nav-item ">
         <a class="nav-link" data-scroll href="/index/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" data-value="Home">Home</a>
     </li>

     <li class="nav-item activeitemall">
      <a class="nav-link hvr-bounce-in"data-scroll href="/flowcode/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>">qR Code</a>
  </li>
  <li class="nav-item">
    <a class="nav-link hvr-bounce-in" data-scroll
    href="/about/default/<?=(isset($this->_params[0]))?$this->_params[0]:'' ?>" role="button">
    about
    </a>
</li>
     <li class="nav-item">
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
  <!-- Start Section How_To_Flowcode -->
   <!-- End Section How_To_Flowcode -->
</header>
<!-- ================================================= -->
<!-- End Header -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Create_Flowcode -->
<div class="Create_Flowcode">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6">
    <div class="step_one">
     <div class="step1text">
      <h4>step 1 : <span>Choose your destination</span></h4>
       </div>
     <div class="list-group" id="list-tab" role="tablist">
            <a class="step1_span"
              id="list-Website-list" data-toggle="list" href="#list-Website"
              role="tab" aria-controls="Website">
                    <i class="fas fa-link"></i>
                    <span> URL</span>
                   </a>
            <a class="step1_span"
                id="list-text-list" data-toggle="list" href="#list-text"
                role="tab" aria-controls="in">
                 <i class="fas fa-file-alt"></i>
                 <span> Text</span>
             </a>
            <a class="step1_span" id="list-sms-list" data-toggle="list" href="#list-sms" role="tab" aria-controls="youtube">
                <i class="fas fa-sms"></i>
                <span> SMS</span>
            </a>
            <a class="step1_span" id="list-tele-list" data-toggle="list" href="#list-tele" role="tab" aria-controls="facebook" >
                <i class="fas fa-phone-alt"></i>
                <span> Telephone</span>
            </a>
            <a class="step1_span"
           id="list-Email-list" data-toggle="list" href="#list-Email"
           role="tab" aria-controls="Email">
            <i class="fas fa-envelope"></i>
            <span>Email</span>
           </a>
             <a class="step1_span"
                id="list-skype-list" data-toggle="list" href="#list-skype"
                role="tab" aria-controls="Email">
                 <i class="fab fa-skype"></i>
                 <span>Skype Call</span>
             </a>
             <a class="step1_span"
                id="list-business-list" data-toggle="list" href="#list-business"
                role="tab" aria-controls="Email">
                 <i class="fas fa-address-card"></i>
                 <span>Business Card</span>
             </a>
             <a class="step1_span"
                id="list-servay-list" data-toggle="list" href="#list-servay"
                role="tab" aria-controls="Email">
                 <i class="fas fa-poll"></i>
                 <span>Survay</span>
             </a>

     </div>
    </div>
    </div>
    <div class="col-lg-5 col-md-6">
      <div class="step_two">
          <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active step_twoall" id="list-Website" role="tabpanel" aria-labelledby="list-Website-list">
                  <div class="step2text">
                    <h4>step 2 : <span>Enter your Full <span>URL@</span></span></h4>
                  </div>
                      <div class="step2_email">
                        <i class="fas fa-link"></i>
                        <h4>URL :</h4>
                        <input class="btnUp" type="text" placeholder="htttps://www.mywebsite.com/" data-type="url">
                      </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-sms" role="tabpanel"
                aria-labelledby="list-sms-list">
                <div class="step2text">
                  <h4>step 2 : <span>Enter your <span>SMS</span></span></h4>
                </div>
                <div class="step2_email">
                  <i class="fas fa-link"></i>
                  <h4>Phone Number :</h4>
                  <input class="btnUp" type="text" placeholder="(049)012-345-678" data-type="sms">
                </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-tele" role="tabpanel"
                aria-labelledby="list-tele-list">
                <div class="step2text">
                  <h4>step 2 : <span>Enter your <span>Number</span></span></h4>
                </div>
                <div class="step2_email">
                  <i class="fas fa-link"></i>
                  <h4>Number :</h4>
                  <input class="btnUp" type="text" placeholder="0020101256589" data-type="tele">
                </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-skype" role="tabpanel"
                aria-labelledby="list-skype-list">
                <div class="step2text">
                  <h4>step 2 : <span>Enter your <span>skype@</span></span></h4>
                </div>


                    <div class="step2_email">
                        <?php
                        if (isset($_SESSION['name']))
                        {?>
                            <h4>user name :</h4>
                            <i class="fab fa-skype"></i>
                            <input class="btnUp" type="text" name="" id="" data-type="skype">
                        <?php
                        }else
                        {?>
                            <h4>Please signup to get this feature</h4>
                            <a href="/signup">Sign up</a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-Email" role="tabpanel"
                aria-labelledby="list-Email-list">
                <div class="step2text">
                  <h4>step 2 : <span>Enter your <span>email@</span></span></h4>
                </div>
                    <div class="step2_email">
                        <?php
                        if (isset($_SESSION['name']))
                        {?>
                            <h4>mail to :</h4>
                            <input class="small-in" type="text" name="" id="mailTo">
                            <h4>subject :</h4>
                            <input class="small-in" type="text" name="" id="subject">
                            <h4>body :</h4>
                            <textarea name="" id="body" cols="53" rows="5"></textarea>

                            <button class="emailSub">create</button>
                            <?php
                        }else
                        {?>
                            <h4>Please signup to get this feature</h4>
                            <a href="/signup">Sign up</a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-business" role="tabpanel"
                            aria-labelledby="list-business-list">
                            <div class="step2text">
                              <h4>step 2 : <span>Enter your <span>data</span></span></h4>
                            </div>
                            <div class="step2_email">
                                <?php
                                if (isset($_SESSION['name']))
                                {?>
                                    <h4>name :</h4>
                                    <input class="small-in" type="text" name="" id="name">
                                    <h4>phone :</h4>
                                    <input class="small-in" type="text" name="" id="phone">
                                    <h4>email :</h4>
                                    <input class="small-in" type="text" name="" id="email">
                                    <h4>Organization Name :</h4>
                                    <input class="small-in" type="text" name="" id="org">

                                    <button class="busSub">create</button>
                                    <?php
                                }else
                                {?>
                                    <h4>Please signup to get this feature</h4>
                                    <a href="/signup">Sign up</a>
                                    <?php
                                }
                                ?>

                            </div>
                 </div>
                <div class="tab-pane fade step_twoall" id="list-text" role="tabpanel"
                    aria-labelledby="list-text-list">
                    <div class="step2text">
                      <h4>step 2 : <span>Enter your <span>Text</span></span></h4>
                    </div>
                    <div class="step2_email">
                      <i class="fas fa-link"></i>
                      <h4>Text : </h4>
                      <input class="btnUp" type="text" placeholder="text..">
                    </div>
                </div>
                <div class="tab-pane fade step_twoall" id="list-servay" role="tabpanel"
                   aria-labelledby="list-servay-list">
                  <div class="step2_email">
                      <?php
                      if (isset($_SESSION['name']))
                      {?>
                          <h4>Get Your own Servey Quickly </h4>
                          <button class="survey" data-link="http://mvcapp.com/survay/default/<?= $this->_params[0]?>">Create</button>
                      <?php }else{?>
                          <h4>Please signup to get this feature</h4>
                          <a href="/signup">Sign up</a>
                      <?php }
                      ?>

                  </div>
              </div>
          </div>
      </div>

    </div>
    <div class="col-lg-4 col-md-6">
     <div class="step_four">
      <div class="step4text">
        <h4>step 3 : <span>Download your code</span></h4>
       </div>
       <div class="step4img">
         <img src="/imgs/qr Page/image.jpg">
       </div>
       <div class="step4form">
         <form>
            <a class="link_butt" href="/imgs/qr Page/image.jpg" download="qrtech">download code</a>
         </form>
       </div>
     </div>
    </div>
  </div>
</div>
</div>
<!-- End Section Create_Flowcode-->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section How_To_Flowcode -->
<div class="How_To_Flowcode">
  <h2 class="head">how to Create <span>qR Code</span></h2>
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
text or any other type of info. Once you’re done, select “Generate.”
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
</div>
<!-- End Section How_To_Flowcode -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section Questions -->
<div class="Questions">
  <h2 class="head">Have more <span>questions?</span></h2>
  <div class="container questionalll">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="Questions_img">
          <img src="/imgs/question.png">
        </div>
      </div>
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
Depending on your device, you might already have a built-in QR Code reader or scanner. Open the camera app on your mobile phone and hold it over a Code for a few seconds until a notification pops up. If this doesn’t happen, check your settings and see if QR Code scanning is enabled. Still not working? Don’t worry, all you have
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
All of our Static QR Codes are free. This includes URL, vCard, Plain text, Email, SMS, Twitter, WiFi, and Bitcoin. Once created, they are yours forever. The only drawback with these types is that you won’t be able to edit
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
AQR Codes are so versatile, they are able to store a variety of information depending on your needs. It can store a URL to make it easier for you to open a page on the web with just a scan. It can also store contact details so that you don’t have to manually type the name, phone number, and email address to save it to your phone. But of
course, this is just the tip of the iceberg; you can view more use cases here.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Section Questions -->
<!-- ========================================================== -->
<!-- ========================================================== -->
<!-- Start Section color_boxtwo -->
<div class="color_boxtwo">
  <div class="container">
  <div class="color_box">
    <h3>When in doubt,<span> go PRO</span></h3>
    <p>All of our Dynamic QR Codes are mistake-proof.
Made a typo? Fixed. Link no longer working? Replaced. Old images or files? Refreshed.</p>
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
    <script src="/js/ajax.js"></script>
</body>
</html>