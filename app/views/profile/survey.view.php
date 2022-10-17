<?php
session_start();

if (isset($_SESSION['name']))
{
$quality=[] ;
$service = [];
$clean = [];
$staff = [];
$money = [];
foreach ($this->data as $survey)
{
    array_push($quality,$survey['quality']);
    array_push($service,$survey['service']);
    array_push($clean,$survey['clean']);
    array_push($staff,$survey['staff']);
    array_push($money,$survey['money']);
}

$quality_count = array_count_values($quality);
$quality_vpoor =   (array_key_exists("very poor",$quality_count))?$quality_count['very poor']:0;
$quality_poor =   (array_key_exists("poor",$quality_count))?$quality_count['poor']:0;
$quality_good =   (array_key_exists("good",$quality_count))?$quality_count['good']:0;
$quality_vgood =   (array_key_exists("very good",$quality_count))?$quality_count['very good']:0;
$quality_exc =   (array_key_exists("excellent",$quality_count))?$quality_count['excellent']:0;


$service_count = array_count_values($service);
$service_vpoor =   (array_key_exists("very poor",$service_count))?$service_count['very poor']:0;
$service_poor =   (array_key_exists("poor",$service_count))?$service_count['poor']:0;
$service_good =    (array_key_exists("good",$service_count))?$service_count['good']:0;
$service_vgood =    (array_key_exists("very good",$service_count))?$service_count['very good']:0;
$service_exc =    (array_key_exists("excellent",$service_count))?$service_count['excellent']:0;

$clean_count = array_count_values($clean);
$clean_vpoor =    (array_key_exists("very poor",$clean_count))?$clean_count['very poor']:0;
$clean_poor =   (array_key_exists("poor",$clean_count))?$clean_count['poor']:0;
$clean_good =   (array_key_exists("good",$clean_count))?$clean_count['good']:0;
$clean_vgood =    (array_key_exists("very good",$clean_count))?$clean_count['very good']:0;
$clean_exc =  (array_key_exists("excellent",$clean_count))?$clean_count['excellent']:0;

$staff_count = array_count_values($staff);
$staff_vpoor =   (array_key_exists("very poor",$staff_count))?$staff_count['very poor']:0;
$staff_poor =    (array_key_exists("poor",$staff_count))?$staff_count['poor']:0;
$staff_good =    (array_key_exists("good",$staff_count))?$staff_count['good']:0;
$staff_vgood =  (array_key_exists("very good",$staff_count))?$staff_count['very good']:0;
$staff_exc =   (array_key_exists("excellent",$staff_count))?$staff_count['excellent']:0;

$money_count = array_count_values($money);
$money_vpoor =  (array_key_exists("very poor",$money_count))?$money_count['very poor']:0;
$money_poor =   (array_key_exists("poor",$money_count))?$money_count['poor']:0;
$money_good =   (array_key_exists("good",$money_count))?$money_count['good']:0;
$money_vgood =   (array_key_exists("very good",$money_count))?$money_count['very good']:0;
$money_exc =   (array_key_exists("excellent",$money_count))?$money_count['excellent']:0;

$productQuality = array(
    array("label"=> "Very Poor", "y"=> $quality_vpoor),
    array("label"=> "Poor", "y"=> $quality_poor),
    array("label"=> "Good", "y"=> $quality_good),
    array("label"=> "Very Good", "y"=> $quality_vgood),
    array("label"=> "Excellent", "y"=> $quality_exc),
);
$serviceQuality = array(
    array("label"=> "Very Poor", "y"=> $service_vpoor),
    array("label"=> "Poor", "y"=> $service_poor),
    array("label"=> "Good", "y"=> $service_good),
    array("label"=> "Very Good", "y"=> $service_vgood),
    array("label"=> "Excellent", "y"=> $service_exc),
);
$cleanQuality = array(
    array("label"=> "Very Poor", "y"=> $clean_vpoor),
    array("label"=> "Poor", "y"=> $clean_poor),
    array("label"=> "Good", "y"=> $clean_good),
    array("label"=> "Very Good", "y"=> $clean_vgood),
    array("label"=> "Excellent", "y"=> $clean_exc),
);
$staffQuality = array(
    array("label"=> "Very Poor", "y"=> $staff_vpoor),
    array("label"=> "Poor", "y"=> $staff_poor),
    array("label"=> "Good", "y"=> $staff_good),
    array("label"=> "Very Good", "y"=> $staff_vgood),
    array("label"=> "Excellent", "y"=> $staff_exc),
);
$moneyQuality = array(
    array("label"=> "Very Poor", "y"=> $money_vpoor),
    array("label"=> "Poor", "y"=> $money_poor),
    array("label"=> "Good", "y"=> $money_good),
    array("label"=> "Very Good", "y"=> $money_vgood),
    array("label"=> "Excellent", "y"=> $money_exc),
);

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

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <script>
        window.onload = function () {

            var quality = new CanvasJS.Chart("quality", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Product Quality"
                },
                axisY: {
                    title: "Number of reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($productQuality, JSON_NUMERIC_CHECK); ?>
                }]
            });
            var service = new CanvasJS.Chart("service", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Service Quality"
                },
                axisY: {
                    title: "Number of reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($serviceQuality, JSON_NUMERIC_CHECK); ?>
                }]
            });
            var clean = new CanvasJS.Chart("clean", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Cleanliness"
                },
                axisY: {
                    title: "Number of reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($cleanQuality, JSON_NUMERIC_CHECK); ?>
                }]
            });
            var staff = new CanvasJS.Chart("staff", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Staff"
                },
                axisY: {
                    title: "Number of reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($staffQuality, JSON_NUMERIC_CHECK); ?>
                }]
            });
            var money = new CanvasJS.Chart("money", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Value Of Money"
                },
                axisY: {
                    title: "Number of reviews"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($moneyQuality, JSON_NUMERIC_CHECK); ?>
                }]
            });
            quality.render();
            service.render();
            clean.render();
            staff.render();
            money.render();

        }
    </script>
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
                        <a class="nav-link " aria-current="page" href="/profile/default/<?=$this->_params[0]; ?>">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/profile/survey/<?= $this->_params[0];?>">
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
                <h1 class="h2">Survey Analysis</h1>

            </div>
            <?php
            if (!empty($this->data))
            {?>
                <div class="row mb-4">
                    <div class="col-md-6 col-sm-12">
                        <div id="quality" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div id="service" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 col-sm-12">
                        <div id="clean" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div id="staff" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <div id="money" style="height: 370px; width: 100%;"></div>
                    </div>

                </div>



                <h2>Survey data</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Product Quality</th>
                            <th scope="col">Service Quality</th>
                            <th scope="col">Cleanliness</th>
                            <th scope="col">Staff</th>
                            <th scope="col">Value for money</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($this->data as $survey)
                        {?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?=$survey['quality'] ?></td>
                                <td><?=$survey['service'] ?></td>
                                <td><?=$survey['clean'] ?></td>
                                <td><?=$survey['staff'] ?></td>
                                <td><?=$survey['money'] ?></td>
                            </tr>
                        <?php } ?>


                        </tbody>
                    </table>
                </div>
            <?php }else{?>
                <div class="alert alert-warning" role="alert">
                    There is no one record his opinion yet !
                </div>
            <?php }
            ?>

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