<?php

/*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

session_start();

// isset verifica si existe una variable 
if (isset($_SESSION['id'])) {
  header('location: controller/redirec.php');
}

?>

<!DOCTYPE html>
<html lang="es-ES">
<html>

<head>
  <meta charset="utf-8">
  <title>Inicar sesión - Follow Go</title>


  <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
  <link rel="stylesheet" href="estiloL/css/sweetalert.css">
  <link rel="stylesheet" href="estiloL/css/estilo.css">
  <link rel="shortcut icon" href="../Vistas/img/Logo1.png" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" href="../Vistas/img/Logo.png" type="image/x-icon">
  <link rel="stylesheet" href="Follow-Go\Vistas\css\bootstrap.css">
</head>

<body>
  <!-- Formulario Login 
    -->

  <div class="container1">
    <!-- <img src="estiloL/img/color.png">-->
    <div class="img">
      <img src="estiloL/img/Logo1.jpg" class="wave1">
    </div>

    <div class="login-container">
      <form action="index.html" class="login-conten2">
        <img class="avatar" src="estiloL/img/undraw_community_8nwl.png">
        <h2>Iniciar Sesión</h2>

        <!-- Caja de texto para usuario -->
        <div class="input-div1 one focus">
          <div class="ii">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" class="input1" id="user" placeholder="Usuario" requiered>
        </div>

        <!--
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>-->
        <!-- Caja de texto para la clave-->

        
        <div class="input-div1 two focus">
          <div class="ii">
            <i class="fa fa-lock"></i>
        </div>
          <input type="password" class="input1" id="clave" placeholder="Clave" requiered>
        </div>


        <div class="input-group-append">
          <button id="show_password" class="btn btn-primary" class="input1" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
        </div>



        <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->

        <div class="row" id="load" hidden="hidden">
          <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
            <img src="estiloL/img/load.gif" width="100%" alt="">
          </div>
          <div class="col-xs-12 center text-accent">
            <span>Validando información...</span>
          </div>
        </div>

        <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->

        <div class="row">
          <div>
            <button type="button" class="btn1" name="button" id="login">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--Implementacion mostrar contraseña-->
  <script type="text/javascript">
    function mostrarPassword() {
      var cambio = document.getElementById("clave");
      if (cambio.type == "password") {
        cambio.type = "text";
        $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
      } else {
        cambio.type = "password";
        $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
      }
    }
  </script>



  <!-- Jquery -->
  <script src="estiloL/js/jquery.js"></script>
  <!-- SweetAlert js -->
  <script src="estiloL/js/sweetalert.min.js"></script>
  <!-- Js personalizado -->
  <script src="estiloL/js/operaciones.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>