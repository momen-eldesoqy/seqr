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

<body class="survey">
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
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-sm-6">
                <img class="img-fluid" src="/imgs/suvey.webp">
            </div>
            <div class="col-sm-6 mt-lg-5">
                <?php
                if (isset($_SESSION['survay_added'])) { ?>
                    <div class="alert alert-success" role="alert">
                        Thank you for your opinion ,survay sent successfully
                    </div>
                    <?php session_destroy(); }else{?>
                    <form method="post" action="/survay/add/<?=$this->_params[0]?>">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Very Poor</th>
                                <th scope="col">Poor</th>
                                <th scope="col">Good</th>
                                <th scope="col">Very Good</th>
                                <th scope="col">Excellent</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Product Quality</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadio1" value="very poor" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadio1" value="poor">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadio1" value="good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadio1" value="very good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="quality" id="inlineRadio1" value="excellent">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Service Quality</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="inlineRadio1" value="very poor" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="inlineRadio1" value="poor">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="inlineRadio1" value="good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="inlineRadio1" value="very good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="service" id="inlineRadio1" value="excellent">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Cleanliness</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="clean" id="inlineRadio1" value="very poor" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="clean" id="inlineRadio1" value="poor">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="clean" id="inlineRadio1" value="good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="clean" id="inlineRadio1" value="very good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="clean" id="inlineRadio1" value="excellent">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Staff</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="staff" id="inlineRadio1" value="very poor" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="staff" id="inlineRadio1" value="poor">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="staff" id="inlineRadio1" value="good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="staff" id="inlineRadio1" value="very good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="staff" id="inlineRadio1" value="excellent">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Value For Money</th>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="money" id="inlineRadio1" value="poor" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="money" id="inlineRadio1" value="very poor">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="money" id="inlineRadio1" value="good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="money" id="inlineRadio1" value="very good">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="money" id="inlineRadio1" value="excellent">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="submit" name="add" class="btn btn-primary">Submit</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                <?php } ?>
            </div>


        </div>
    </div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/qr.js"></script>
</body>
</html>