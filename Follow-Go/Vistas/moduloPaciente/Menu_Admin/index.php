<?php
  
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    
    header('location: ../../../Login/index.php');
  }

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Administrador</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="js/modernizr.custom.25376.js"></script>
</head>

<body>
    <div id="perspective" class="perspective effect-airbnb">
        <div class="container">
            <div class="wrapper">
                <!-- wrapper needed for scroll -->
                <!-- Top Navigation -->
                <div class="codrops-top clearfix">
                    <span class="right"><a class="codrops-icon codrops-icon-drop" href="../../../Login/controller/cerrarSesion.php"><span>Cerrar Sesión</span></a>
                    </span>
                </div>
                <header class="codrops-header">
                    <h1>Follow Go S.A.S <span>Atención rápida para trasladar a sus pacientes.</span></h1>
                </header>
                <div class="main clearfix">
                    <div class="column">
                        
                        <p>Bienvenido Administrador</p>
                    </div>
                    <div class="column">
                        <nav class="codrops-demos">
                            <img src="img/Logo1.png" alt="" class="Image_Logo">
                        </nav>
                    </div>
                    <!--
                    <div class="related">
                        <p>If you enjoyed this demo you might also like:</p>
                        <p><a href="http://tympanus.net/Tutorials/AnimatedBorderMenus/">Animated Border Menus</a></p>
                        <p><a href="http://tympanus.net/Development/SidebarTransitions/">Transitions for Off-Canvas Navigations</a></p>
                    </div>-->
                </div>
                <!-- /main -->
            </div>
            <!-- wrapper -->
        </div>
        
    </div>
    <!-- /container -->
        <nav class="outer-nav left vertical">
            <a href="../PruebaDeFormulario.php" class="icon-home">Home</a>
            <a href="#" class="fas fa-user">Usuario</a>
            <a href="#" class="icon-image">Conductor</a>
            <a href="#" class="icon-upload">Vehículo</a>
            <a href="#" class="icon-star">Paciente</a>
            <a href="#" class="icon-mail">Servicio</a>
        </nav>
    <!-- /perspective -->
    <script src="js/classie.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>