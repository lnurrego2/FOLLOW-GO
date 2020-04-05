<!--Incluir Menu-->
<?php include "Menu.php" ?>

<?php include "Conexion_BD/Base_De_Datos.php" ?>


<title>Consulta de vehículos</title>

<body>
    <?php include "Nav.php" ?>
    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <h4 class="header-title mb-3">Listado de usuarios</h4>
                        </div>
                        <div class="form-group col-md-3">
                            <a href="Formulario_Vehiculos.php" class="btn btn-outline-primary" name="BotonRegistroUsuario">Registrar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>

                                    <th>Código Del Vehiculo</th>

                                    <th>Placa</th>
                                    <th>Modelo</th>
                                    <th>Tipo</th>
                                    <th>Marca</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM vehiculo Where estadoVehiculo = 1";
                                $ResultadoRegistroVehiculos = mysqli_query($Conn, $query);

                                while ($row = mysqli_fetch_array($ResultadoRegistroVehiculos)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['codigoVehiculo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['placa']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['modelo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['tipo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['marca']; ?>
                                        </td>
                                        <td>
                                            <a href="Actualizar_Vehiculo.php?codigoVehiculo=<?php echo $row['codigoVehiculo'] ?>" class="btn btn-outline-info">
                                                <i class="fas fa-marker"></i></a>
                                            <!--<a href="Eliminar_Vehiculo.php?codigoVehiculo=<?php //echo $row ['codigoVehiculo']
                                                                                                ?>" class = "btn btn-outline-danger">   
                                <i class = "far fa-trash-alt"></i></a>-->
                                            <a href="Inhabilitar_Vehiculo.php?codigoVehiculo=<?php echo $row['codigoVehiculo'] ?>" class="btn btn-outline-danger">
                                                <i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

</body>

<!--Script's-->
<!--Script's-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</html>