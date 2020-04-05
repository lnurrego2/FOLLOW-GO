<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include "Conexion_BD/Base_De_Datos.php" ?>

<?php include "Nav.php" ?>
<div class="Principal_Tablas">
    <div class="row">
        <div class="col-lg-8">
            <div class="card-box">
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <h4 class="header-title mb-3">Listado de servicios</h4>
                    </div>
                    <div class="form-group col-md-3">
                        <a href="Mostrar_Servicio.php" class="btn btn-outline-success" name="BotonRegistroUsuario">Consultar</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-centered m-0">
                        <thead>
                            <tr>
                                <th>Código Del Servicio</th>
                                <th>Fecha Y Hora</th>
                                <th>Precauciones</th>
                                <th>Código del Paciente</th>
                                <th>Licencia del Conductor</th>
                                <th>Código del Vehículo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM servicio";
                            $ResultadoRegistroServicio = mysqli_query($Conn, $query);

                            while ($row = mysqli_fetch_array($ResultadoRegistroServicio)) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $row['codigoServicio']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['fecha_hora']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['precauciones']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['codigoPaciente']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['licencia']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['codigoVehiculo']; ?>
                                    </td>
                                    <td>
                                        <a href="Actualizar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-info">
                                            <i class="fas fa-marker"></i></a>
                                        <a href="Eliminar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-danger">
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
                <h4 class="m-t-0 header-title">Actualizacion de Servicio</h4>
                <div id="donut-chart">
                    <div id="donut-chart-container" class="flot-chart mt-5" style="height: 340px;">
                        <h1>SERVICIO</h1>
                        <br>
                        <form action="Actualizar_Servicio.php?id=<?php echo $_GET['id'];  ?>" METHOD="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="Actualizarid" value="<?php echo $idusuario; ?>" class="form-control" placeholder="Actualiza La id">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarCC" value="<?php echo $ccusuario; ?>" class="form-control" placeholder="Actualiza La Cedula">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarNombre" value="<?php echo $nombreusuario; ?>" class="form-control" placeholder="Actualice el Nombre por favor" rows="2">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarApellido" value="<?php echo $apellidousuario; ?>" class="form-control" placeholder="Actualice el Apellido por favor">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizaDireccion" value="<?php echo $direccionusuario; ?>" class="form-control" placeholder="Actualice la Dirección por favor">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarTelefono" value="<?php echo $telefonousuario; ?>" class="form-control" placeholder="Actualice el Teléfono por favor">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarCorreo" value="<?php echo $correousuario; ?>" class="form-control" placeholder="Actualice el Correo por favor">
                            </div>
                            <div class="form-group">
                                <input type="password" name="ActualizarClave" value="<?php echo $claveusuario; ?>" class="form-control" placeholder="Actualice la Clave por favor">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarRol" value="<?php echo $rolusuario; ?>" class="form-control" placeholder="Actualice el Rol por favor">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarEstado" value="<?php echo $estadousuario; ?>" class="form-control" placeholder="Actualice el Estado por favor">
                            </div>
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