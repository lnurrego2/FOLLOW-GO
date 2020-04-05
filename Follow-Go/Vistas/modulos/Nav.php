<?php

session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 1) {

    header('location: ../../Login/index.php');
}

?>



<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- App favicon -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="shortcut icon" href="../img/Logo111.png">

    <!-- App css -->
    <link href="Admin/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Admin/horizontal/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="Admin/horizontal/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../img/Logo111.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">

    <script src="Admin/horizontal/assets/js/modernizr.min.js"></script>

</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Image Logo -->
                    <a href="#" class="logo">
                        <img src="../img/Logo111.png" alt="" height="50" class="logo-small">
                        <img src="../img/Logo111.png" alt="" height="50" class="logo-large">
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras topbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="Admin/horizontal/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name"><?php echo ucfirst($_SESSION['nombre']);  ?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido</h6>
                                </div>

                                <!-- item-->
                                <a href="" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>Mi Cuenta</span>
                                </a>

                                <!-- item-->
                                <a href="Cambiar_Clave.php" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Cambiar Clave</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Soporte</span>
                                </a>

                                <!-- item-->
                                <a href="../../Login/controller/cerrarSesion.php" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Salir de mi cuenta</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="index.php"><i class="fas fa-home"></i>Inicio</a>
                        </li>
                        <li class="has-submenu">
                            <a href="Mostrar_Usuario.php"><i class="fas fa-user"></i>Listado de Usuario</a>
                        </li>

                        <li class="has-submenu">
                            <a href="Mostrar_Conductor.php"><i class="fas fa-id-card"></i>Listado de Conductor</a>
                        </li>

                        <li class="has-submenu">
                            <a href="Mostrar_Vehiculos.php"><i class="fas fa-ambulance"></i>Listado de Vehiculo</a>
                        </li>

                        <li class="has-submenu">
                            <a href="Mostrar_Paciente.php"><i class="fas fa-user-injured"></i>Listado de Paciente</a>
                        </li>

                        <li class="has-submenu">
                            <a href="Pacientes_Activos.php"><i class="fas fa-tasks"></i>Pacientes Activos</a>
                        </li>

                        <li class="has-submenu">
                            <a href="Mostrar_Servicio.php"><i class="fas fa-tasks"></i>Historial de Servicios</a>
                        </li>

                </div> <!-- end #navigation -->
            </div> <!-- end container -->
        </div> <!-- end navbar-custom -->
    </header>
    <!-- End Navigation Bar-->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    <?php echo ucfirst($_SESSION['nombre']);  ?>
                </div>
                <div class="col-4 text-center">
                    <div class="cpy-right text-center">
                        <p>2020 Follow Go S.A.S. Todos los derechos reservados
                        </p>
                    </div>
                </div>
                <div class="col-4 text-center" style="width: 1rem;">
                    <img src="../img/Logo111.png" alt="" height="50" class="logo-large">
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery  -->
    <script src="Admin/horizontal/assets/js/jquery.min.js"></script>
    <script src="Admin/horizontal/assets/js/popper.min.js"></script>
    <script src="Admin/horizontal/assets/js/bootstrap.min.js"></script>
    <script src="Admin/horizontal/assets/js/waves.js"></script>
    <script src="Admin/horizontal/assets/js/jquery.slimscroll.js"></script>

    <!-- Flot chart -->
    <script src="Admin/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="Admin/plugins/flot-chart/curvedLines.js"></script>
    <script src="Admin/plugins/flot-chart/jquery.flot.axislabels.js"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
    <script src="Admin/plugins/jquery-knob/jquery.knob.js"></script>

    <!-- Dashboard Init -->
    <script src="Admin/horizontal/assets/pages/jquery.dashboard.init.js"></script>

    <!-- App js -->
    <script src="Admin/horizontal/assets/js/jquery.core.js"></script>
    <script src="Admin/horizontal/assets/js/jquery.app.js"></script>

    <!--Script's-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>



</body>

</html>