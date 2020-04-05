<!--Incluir Menu-->
<?php include "Menu.php";
session_start();
include("Conexion_BD/Base_De_Datos.php");

$query = "SELECT * from usuario Where id ='" . $_SESSION['id'] . "'";
$ResultadoRegistroUsuarios = mysqli_query($Conn, $query);

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM usuario WHERE id = $id";
    $ResultadoUsuarioActualizar = mysqli_query($Conn, $query);

    if (mysqli_num_rows($ResultadoUsuarioActualizar) == 1) {
        $row = mysqli_fetch_array($ResultadoUsuarioActualizar);
        $idusuario = $row['id'];
        $ccusuario = $row['CC'];
        $nombreusuario = $row['nombre'];
        $apellidousuario = $row['apellido'];
        $direccionusuario = $row['direccion'];
        $telefonousuario = $row['telefono'];
        $correousuario = $row['correo'];
        $claveusuario = $row['clave'];
        //$rolusuario = $row ['rol']; $estadousuario = $row ['estadoUsuario'];


    }
}

if (isset($_POST['BotonActualizarUsuario'])) {
    $id = $_GET['id'];
    $idusuario = $_POST['Actualizarid'];
    $ccusuario = $_POST['ActualizarCC'];
    $nombreusuario = $_POST['ActualizarNombre'];
    $apellidousuario = $_POST['ActualizarApellido'];
    $direccionusuario = $_POST['ActualizaDireccion'];
    $telefonousuario = $_POST['ActualizarTelefono'];
    $correousuario = $_POST['ActualizarCorreo'];
    $claveusuario = $_POST['ActualizarClave'];
    //$rolusuario = $_POST ['ActualizarRol']; $estadousuario = $_POST ['ActualizarEstado'];

    $query = "UPDATE usuario set CC = '$ccusuario',nombre = '$nombreusuario', apellido = '$apellidousuario', direccion = '$direccionusuario',
                                        telefono = '$telefonousuario', correo = '$correousuario', clave = '$claveusuario', rol = '$rolusuario', estadoUsuario = '$estadousuario' WHERE id = '$id'";
    mysqli_query($Conn, $query);
    header("location: Mostrar_Usuario.php");
}





?>

<title>Actualizacion Usuarios</title>

<?php include "Nav.php" ?>
<html lang="ES">
<div class="Principal_Tablas">
    <div class="row">

        <div class="col-lg-4">
            <div class="card-box">
                <div id="donut-chart">
                    <div id="donut-chart-container" class="flot-chart mt-5">
                        <h1>Cambiar Contraseña</h1>
                        <!------------------------------------------------------------------------------------------------------>
                        <!-- Formulario Login -->
                        <img src="Follow-Go/Vistas/modulos/Menu_Admin/img/color.png" alt="Color" class="wave1">
                        <div class="container1">

                            <div class="img">
                                <img src="img/undraw_my_location_f9pr.png">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-4 col-md-offset-4">
                                    <!-- Margen superior (css personalizado )-->
                                    <div class="spacing-1"></div>

                                    <form id="formulario_registro">
                                        <!-- Estructura del formulario -->
                                        <fieldset>

                                            <legend class="center">

                                                <!-- Caja de texto para usuario -->
                                                <br>
                                                <!-- Caja de texto para la clave-->
                                                <div class="input-div1 one focus">
                                                    <div class="ii">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <h5>Clave</h5>
                                                    <input type="password" class="input1" name="clave">
                                                </div>

                                                <br>

                                                <!-- Caja de texto para la clave-->
                                                <div class="input-div1 one focus">
                                                    <div class="ii">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <h5>Verificar Clave</h5>
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
                                            </legend>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>