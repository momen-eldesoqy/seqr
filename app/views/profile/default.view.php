<?php
session_start();
if (isset($_SESSION['name']))
{


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .card-info h3
        {
            font-size: 40px;
        }
        .card-info h3 span
        {
            color: #1974D2;
        }
        .card-info p
        {
            font-size: 35px;
        }
        .card-info a
        {
            margin-left:60px ;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">QR TECH</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="/profile/logout">Sign out</a>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/profile/default/<?=$this->_params[0]; ?>">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/survey/<?= $this->_params[0];?>">
                            <span data-feather="file"></span>
                            Survey Results
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/message/<?= $this->_params[0];?>">
                            <span data-feather="shopping-cart"></span>
                            Messeges
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/account/<?= $this->_params[0];?>">
                            <span data-feather="users"></span>
                            Account
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="/flowcode/default/<?=$this->_params[0] ?>" class="btn btn-primary">Create QR</a>
                </div>
            </div>
            <div class="row card-info">
                <div class="col-md-6 col-xs-12">
                    <h3>Hello, <span><?= $_SESSION['name']; ?></span></h3>
                    <p class="lead">This is your own QR Code , you can now connect with the outside World</p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img style="" class="img-fluid" src="<?=$this->data['qrLink'] ?>">
                    <div><a class="btn btn-primary ml-lg-3" href="<?=$this->data['qrLink'] ?>" download="<?= $_SESSION['name']; ?>">Download</a></div>

                </div>
            </div>

        </main>

    </div>
</div>


<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>
<?php
}else{
  header('location:/signin');
}
?>