<?php

session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1) {

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
  <link rel="stylesheet" href="../css/bootstrap-4.4.1-dist">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/MenuDesplegableCss.css">
  <link rel="stylesheet" href="../css/FormulariosCss.css">
  <link rel="stylesheet" href="../css/HomeCss.css">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="Menu_Admin/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="Menu_Admin/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="Menu_Admin/css/component.css" />
  <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
  <script src="Menu_Admin/js/modernizr.custom.25376.js"></script>
</head>

<body>
  <div class="Principal_Vehiculos">
    <div id="perspective" class="perspective effect-airbnb">
      <div class="container">
        <div class="wrapper">
          <h1>USUARIO</h1>
          <br>
          <form action="Registrar_Usuario.php" method="POST">
            <div class="form-group">
              <label for="inputAddress">Identificacion</label> <span>*</span>
              <input type="number" class="form-control" id="inputAddress" name="idUsuario" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label> <span>*</span>
                <input type="text" class="form-control" id="inputEmail4" name="NombreUsuario" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Apellidos</label> <span>*</span>
                <input type="text" class="form-control" id="inputPassword4" name="ApellidoUsuario" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputAddress">Direccion</label> <span>*</span>
                <input type="text" class="form-control" id="inputAddress" name="DireccionUsuario" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputAddress2">Telefono</label> <span>*</span>
                <input type="number" class="form-control" id="inputAddress2" name="TelefonoUsuario" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Correo</label> <span>*</span>
                <input type="email" class="form-control" id="inputCity" name="CorreoUsuario" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Clave</label> <span>*</span>
                <input type="password" size="10" class="form-control" id="inputZip" name="ClaveUsuario" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Rol</label> <span>*</span>
                <select class="form-control" id="exampleFormControlSelect1" name="RolUsuario" required>
                  <option>Administrador</option>
                  <option>Paciente</option>
                  <option>Conductor</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">Estado</label> <span>*</span>
                <select class="form-control" id="exampleFormControlSelect1" name="EstadoUsuario" required>
                  <option>1</option>
                  <option>0</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="BotonRegistrarUsuario">Registrar</button>
              </div>
              <div class="form-group col-md-6">
                <a href="Mostrar_Usuario.php" class="btn btn-success" name="BotonConsultarUsuario">Consultar</a>
              </div>
            </div>
          </form>
        </div>

        <div class="main clearfix">
          <div class="column">
            <p><button id="showMenu">Entrar Al Menu</button></p>

          </div>

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
  </div>
  </div>
  <!-- /container -->
  <nav class="outer-nav left vertical">
    <a href="../Formulario_Usuarios.php" class="icon-home">Home</a>
    <a href="#" class="fas fa-user">Usuario</a>
    <a href="#" class="icon-image">Conductor</a>
    <a href="#" class="icon-upload">Vehículo</a>
    <a href="#" class="icon-star">Paciente</a>
    <a href="#" class="icon-mail">Servicio</a>
  </nav>
  <!-- /perspective -->
  <script src="Menu_Admin/js/classie.js"></script>
  <script src="Menu_Admin/js/menu.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <!--Script's-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>