<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include "Conexion_BD/Base_De_Datos.php" ?>
<html lang="es">
<title>Formulario Usuario</title>

<body>
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
                            <a href="Mostrar_Usuario.php" class="btn btn-outline-success" name="BotonConsultarUsuario">Consultar</a>
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
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM usuario Where estadoUsuario = 1";
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
                                        <td>
                                            <?php echo $row['rol']; ?>
                                        </td>
                                        <td>
                                            <a href="Actualizar_Usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info">
                                                <i class="fas fa-marker"></i></a>
                                            <!--<a href="Eliminar_Usuario.php?id=<?php //echo $row ['id']
                                                                                    ?>" class = "btn btn-outline-danger">   
                                                <i class = "far fa-trash-alt"></i></a>-->
                                            <a href="Inhabilitar_Usuario.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-danger">
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
                            <form action="Registrar_Usuario.php" method="POST">
                                <div class="form-group">
                                    <label for="inputEmail4">Identificación</label> <span class="Obligatorio">*</span>
                                    <input type="text" class="form-control" id="inputEmail4" name="IdentificacionUsuario" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nombre</label> <span class="Obligatorio">*</span>
                                        <input type="text" class="form-control" id="inputEmail4" name="NombreUsuario" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Apellidos</label> <span class="Obligatorio">*</span>
                                        <input type="text" class="form-control" id="inputPassword4" name="ApellidoUsuario" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Direción</label> <span class="Obligatorio">*</span>
                                        <input type="text" class="form-control" id="inputAddress" name="DireccionUsuario" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Teléfono</label> <span class="Obligatorio">*</span>
                                        <input type="number" class="form-control" id="inputAddress2" maxlength="10" value="" name="TelefonoUsuario" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Correo</label> <span class="Obligatorio">*</span>
                                        <input type="email" class="form-control" id="inputCity" name="CorreoUsuario" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlSelect1">Rol</label> <span class="Obligatorio">*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="RolUsuario" required>
                                            <option value="1">Administrador</option>
                                            <option value="2">Paciente</option>
                                            <option value="3">Conductor</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="BotonRegistrarUsuario">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>

</body>

<!--Script's-->

</html>