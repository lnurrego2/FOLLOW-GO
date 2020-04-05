<!DOCTYPE html>
<html lang="ES" class="no-js">
<?php include "Menu.php" ?>
<?php include "Nav.php" ?>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Administrador</title>
    <link rel="shortcut icon" href="../favicon.ico">
    

    <!-- Bootstrap CSS-->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="../js/modernizr.custom.25376.js"></script>

</head>

<body>
<body class="animsition">
    <div class="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,012</h2>
                                                <span><a class="titulo" href="Mostrar_Usuario.php">Listado de Usuario</a></span>
                                                
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>3,688</h2>
                                                <span><a class="titulo" href="Mostrar_Conductor.php">Listado de Conductor</a></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>5,086</h2>
                                                <span><a class="titulo" href="Mostrar_Vehiculo.php">Listado de Vehículo</a></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span><a class="titulo" href="Mostrar_Paciente.php">Listado de Paciente</a></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner"><br>
                                        <div class="chart-info">   
                                            <div class="col-sm-8 col-lg-7">
                                                <div class="overview-item overview-item--c1">
                                                    <div class="overview__inner">
                                                        <div class="overview-box clearfix">
                                                            <div class="icon">
                                                                <i class="zmdi zmdi-account-o"></i>
                                                            </div>
                                                            <div class="text">
                                                                <h2>1,012</h2>
                                                                <span>BIENVENIDO </span>
                                                            </div>
                                                        </div>
                                                        <div class="overview-chart">
                                                            <canvas id="widgetChart1"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                        <div class="au-card-inner"><br>
                                            <div class="chart-info">   
                                                <div class="col-sm-8 col-lg-7">
                                                    <div class="overview-item overview-item--c2">
                                                        <div class="overview__inner">
                                                            <div class="overview-box clearfix">
                                                                <div class="icon">
                                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <h2>3,688</h2>
                                                                    <span>FOLLOW GO</span>
                                                                </div>
                                                            </div>
                                                            <div class="overview-chart">
                                                                <canvas id="widgetChart2"></canvas>
                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Follow Go. <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Jquery JS-->
    <script src="../js/Chart.bundle.min.js"></script>
    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</body>

</html>