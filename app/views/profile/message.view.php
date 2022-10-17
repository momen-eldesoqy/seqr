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
    <link rel="stylesheet" href="/css/all.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
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
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">QRer</a>
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
                        <a class="nav-link " aria-current="page" href="/profile/default/<?=$this->_params[0]; ?>">
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
                        <a class="nav-link active" href="/profile/message/<?= $this->_params[0];?>">
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
                <h1 class="h2">Messages</h1>

            </div>

            <table class="table table-striped">
                <tbody>
                <?php
                if (!empty($this->data))
                {


                foreach ($this->data as $msg )
                {?>
                <tr >
                    <td class="pt-3 pb-3" colspan="3"> <i class="far fa-envelope "></i> <?=$msg['msg'] ?></td>
                    <td class="pt-3 pb-3" ><a href="/profile/delMsg/<?=$this->_params[0] ?>/<?=$msg['id'] ?>"><i class="fas fa-trash"></i></a></td>
                </tr>
                <?php }
                }else{?>
                    <div class="alert alert-warning" role="alert">
                        There is no message yet
                    </div>
                <?php }
                ?>





                </tbody>
            </table>


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