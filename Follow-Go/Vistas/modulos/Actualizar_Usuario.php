<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include("Conexion_BD/Base_De_Datos.php");

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
        //$claveusuario = $row['clave'];
        //$rolusuario = $row ['rol'];
        //$estadousuario = $row ['estadoUsuario'];


    }
}

if (isset($_POST['BotonActualizarUsuario'])) {
    $id = $_GET['id'];
    $idusuario = $_POST['Actualizarid'];
    //$ccusuario = $_POST['ActualizarCC'];
    $nombreusuario = $_POST['ActualizarNombre'];
    $apellidousuario = $_POST['ActualizarApellido'];
    $direccionusuario = $_POST['ActualizaDireccion'];
    $telefonousuario = $_POST['ActualizarTelefono'];
    $correousuario = $_POST['ActualizarCorreo'];
    //$claveusuario = $_POST['ActualizarClave'];
    //$rolusuario = $_POST ['ActualizarRol'];
    //$estadousuario = $_POST ['ActualizarEstado'];

    $query = "UPDATE usuario set nombre = '$nombreusuario', apellido = '$apellidousuario', direccion = '$direccionusuario',
                                       telefono = '$telefonousuario', correo = '$correousuario' WHERE id = '$id'";
    mysqli_query($Conn, $query);
    header("location: Mostrar_Usuario.php");
}





?>
<title>Actualizacion Usuarios</title>

<?php include "Nav.php" ?>
<div class="Principal_Tablas">
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <h4 class="header-title mb-3">Listado de usuarios</h4>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="Formulario_Usuarios.php" class="btn btn-outline-primary" name="BotonRegistroUsuario">Registrar</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cédula de Ciudadanía</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <!--<th>Rol</th>-->
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM usuario";
                            $ResultadoRegistroUsuarios = mysqli_query($Conn, $query);

                            while ($row = mysqli_fetch_array($ResultadoRegistroUsuarios)) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['CC']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nombre']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['apellido']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['direccion']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['telefono']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['correo']; ?>
                                    </td>
                                    <!--<td>
                                            <?php // echo $row ['rol']; 
                                            ?>
                                        </td>-->
                                    <td>
                                        <a href="Actualizar_Usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info">
                                            <i class="fas fa-marker"></i></a>
                                        <a href="Eliminar_Usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">
                                            <i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="card-box">
                <div id="donut-chart">
                    <div id="donut-chart-container" class="flot-chart mt-5">
                        <h1>USUARIO</h1>
                        <form action="Actualizar_Usuario.php?id=<?php echo $_GET['id'];  ?>" METHOD="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="Actualizarid" value="<?php echo $idusuario; ?>" class="form-control" placeholder="Actualzar el Id" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarCC" value="<?php echo $ccusuario; ?>" class="form-control" placeholder="Actualizar la Cedula" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarNombre" value="<?php echo $nombreusuario; ?>" class="form-control" placeholder="Actualizar el Nombre" rows="2">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarApellido" value="<?php echo $apellidousuario; ?>" class="form-control" placeholder="Actualizar el Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizaDireccion" value="<?php echo $direccionusuario; ?>" class="form-control" placeholder="Actualizar la Direccion">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarTelefono" value="<?php echo $telefonousuario; ?>" class="form-control" placeholder="Actualizar el Teléfono">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarCorreo" value="<?php echo $correousuario; ?>" class="form-control" placeholder="Actualizar el Correo">
                            </div>
                            <!--
                        <div class="form-group">
                            <input type="text" name = "ActualizarRol" value = "<?php //echo $rolusuario; 
                                                                                ?>" 
                            class = "form-control" placeholder = "Actualiza El Rol">
                        </div>
                        <div class="form-group">
                            <input type="text" name = "ActualizarEstado" value = "<?php //echo $estadousuario; 
                                                                                    ?>" 
                            class = "form-control" placeholder = "Actualiza El Estado">
                        </div>
                            -->

                            <button type="submit" class="btn btn-outline-dark btn-lg btn-block" name="BotonActualizarUsuario">
                                Actualizar
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


</div>