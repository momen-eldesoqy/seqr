<?php
session_start();

if (isset($_SESSION['name']))
{?>
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
    <!-- Start Header -->
    <header class="header">
        <!-- ========================================================== -->
        <!-- Start navbar -->
        <div class="navbar_hori">

            <a class="navbar-brand" href="index.html">
                QR <i class="fas fa-qrcode"></i>
            </a>
            <p>qR code generator</p>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                 aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                   href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    <i class="fas fa-cogs"></i>
                    dashboard
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                   role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <i class="fas fa-envelope"></i>
                    Messages
                </a>
                <a class="nav-link" id="v-pills-graph-tab" data-toggle="pill" href="#v-pills-graph"
                   role="tab" aria-controls="v-pills-graph" aria-selected="false">
                    <i class="far fa-chart-bar"></i>
                    Survey
                </a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                   role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    <i class="fas fa-user"></i>
                    account </a>
                <a class="nav-link" id="v-pills-settings-tab"  href="/profile/logout"
                   role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fas fa-sign-out-alt"></i>
                    log out</a>
            </div>
        </div>
        <!-- ========================================================== -->
        <div class="content_hori">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fadeshow active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="nav_fixed"></div>
                    <span class="twolink">
                        <a href="/flowcode" class="link_butt">
                          <i class="fas fa-plus"></i>
                          create qR code
                        </a>
                    </span>
                    <div class="container dashall_info">
                        <div class="row ">
                            <div class="col-lg-12 intro-card">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="hello-card">
                                            <h4>Hello , <span>
                                                    <?php
                                                    echo $_SESSION['name'];
                                                    ?>
                                                </span></h4>
                                            <p>This is your own qr code</p>
                                            <p>let people contact you </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img class="own-qr" src="<?=$this->data['qrLink'] ?>">
                                        <a class="down-btn" href="<?=$this->data['qrLink'] ?>" download=<?= $_SESSION['name']?> >download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>

                    <div class="suuport_dash">
                        you can create any content type! <span>write us at <a href="#">@suuport</a>
  and we will try to improve qRCode tech.</span>
                    </div>
                </div>
                <div class="tab-pane fade " id="v-pills-profile" role="tabpanel"
                     aria-labelledby="v-pills-profile-tab">
                    <div class="nav_fixed">
                    </div>
                    <h2>Messages</h2>

                    <hr>
                    <div class="container">
                        <div class="row">
                            <?php
                            if(empty($this->data['msg']))
                            {
                                echo "there is no messages yet !" ;
                            }
                                for ($i=0;$i<count($this->data['msg']);$i++) {?>
                                    <div class="col-sm-6">
                                        <div class="row msg-box">
                                            <div class="col-sm-2">
                                                <i class="fas fa-user-tie fa-3x"></i>
                                            </div>
                                            <div class="col-sm-10">
                                                <p>
                                                    <?= $this->data['msg'][$i]['msg']?>
                                                </p>
                                                <a href="/profile/delMsg/<?=$this->_params[0]?>/<?= $this->data['msg'][$i]['id']?>" class="btn btn-danger pl-lg-4 pr-lg-4">del</a>
                                            </div>
                                        </div>

                                    </div>

                                <?php } ?>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="v-pills-graph" role="tabpanel"
                     aria-labelledby="v-pills-graph-tab">
                    <div class="nav_fixed">
                    </div>
                    <h2>Survey results</h2>

                    <hr>
                    <div class="garph_cont">

                    </div>


                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    <div class="nav_fixed"></div>
                    <!----------------- start form ------------>
                    <div class="data-form">

                        <form method="post" action="/profile/edit/<?= $this->_params[0]?>">
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input name="name" type="text" class="form-control" id="exampleInputName" value="<?=$this->data['name'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Phone</label>
                                <input name="phone" type="text" class="form-control" id="exampleInputPhone" value="<?=$this->data['phone'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?=$this->data['email'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputAddress">Address</label>
                                <input name="address" type="text" class="form-control" id="exampleInputAddress" value="<?=$this->data['address'] ?>" required>
                            </div>

                           <!-- <div class="alert alert-success" role="alert">
                                A simple success alert—check it out!
                            </div>-->


                            <input name="edit" type="submit" class="btn btn-primary" value="save">
                        </form>
                    </div>
                    <!----------------- end form ------------>

                </div>
            </div>
        </div>
        <!-- End Navbar -->
        <!-- ========================================================== -->
    </header>
    <!-- ================================================= -->
    <!-- End Header -->
    <!-- ========================================================== -->
    <!-- ========================================================== -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/qr.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>
<?php
}else{
    header("Location:/signin");

}
