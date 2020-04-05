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
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html lang = "es-ES">
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuarios - Follow Go</title>

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="estiloL/ss/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="estiloL/css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="estiloL/css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="estiloL/css/style.css">

    <link rel="stylesheet" href="estiloL/css/estilo.css">
    <link rel="stylesheet" href="estiloL/css/sweetalert.css">
    <link rel="stylesheet" href="estiloL/css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="../Vistas/img/Logo.png" type="image/x-icon">


  </head>
  <body>
    <!-- Formulario Login -->
    <img src="estiloL/img/color.png" class="wave1">
    <div class="container1">

      <div class="img">
        <img src="estiloL/img/undraw_my_location_f9pr.png">
      </div>

      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>

          <form id="formulario_registro">
            <!-- Estructura del formulario -->
            <fieldset>

              <legend class="center">Registro</legend>

              <!-- Caja de texto para usuario -->
              <div class="input-div1 one focus">
                <div class="ii">
                  <i class="fa fa-user"></i>
                </div>
                <h5>Nombre</h5>
                <input type="text" class="input1" name="name">
              </div>
         
              <br>

              <!-- Caja de texto para usuario -->
              <div class="input-div1 one focus">
                <div class="ii">
                  <i class="fa fa-user"></i>
                </div>
                <h5>Email</h5>
                <input type="text" class="input1" name="email">
              </div>

              <br>
              <!-- Caja de texto para la clave-->
              <div class="input-div1 one focus">
                <div class="ii">
                  <i class="fa fa-lock"></i>
                </div>
                <h5>Contraseña</h5>
                <input type="password"  class="input1" name="clave">
              </div>

              <br>

              <!-- Caja de texto para la clave-->
              <div class="input-div1 one focus">
                <div class="ii">
                  <i class="fa fa-lock"></i>
                </div>
                <h5>Verificar Contraseña</h5>
                <input type="password" class="input1" name="clave2">
              </div>

              <br>

              <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
              <br>
              <!-- Fin load -->

              <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
              <div class="row">
                <div>
                  <button type="button" class="btn1" name="button" id="registro">Registrate</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>

    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
    <!-- Jquery -->
    <script src="estiloL/js/jquery.js"></script>
    <!-- SweetAlert js -->
    <script src="estiloL/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="estiloL/js/operaciones.js"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  </body>
</html>
