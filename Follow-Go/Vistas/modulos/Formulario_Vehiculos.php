<!--Incluir Menu-->
<?php include "Menu.php";

include "Conexion_BD/Base_De_Datos.php";

$tipoVehiculo = mysqli_query($Conn, "SELECT tipo FROM detalles");
$marcaVehiculo = mysqli_query($Conn, "SELECT marca FROM detalles");

?>
<title>Formulario Vehiculo</title>
<html lang="Es">
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
                            <a href="Mostrar_Vehiculos.php" class="btn btn-outline-success" name="BotonRegistroUsuario">Consultar</a>
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
            <div class="col-lg-4">
                <div class="card-box">
                    <div id="donut-chart">
                        <div id="donut-chart-container" class="flot-chart mt-5">
                            <h1>VEHICULO</h1>
                            <form action="Registrar_Vehiculo.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="inputPassword4">Placa</label> <span>*</span>
                                        <input type="text" class="form-control" id=" inputPassword4" name="PlacaVehiculo" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputPassword4">Modelo</label> <span class="Obligatorio">*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="ModeloVehiculo" required>
                                            <option disabled selected>----</option>;
                                            <?php
                                            for ($i = 1975; $i <= 2021; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Tipo</label> <span>*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="TipoVehiculo" required>
                                            <option disabled selected>----</option>;
                                            <?php
                                            while ($Datos = mysqli_fetch_array($tipoVehiculo)) {
                                                echo
                                                    '<option>' .  $Datos['tipo'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Marca</label> <span>*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="MarcaVehiculo" required>
                                            <option disabled selected>----</option>;
                                            <?php
                                            while ($Datos = mysqli_fetch_array($marcaVehiculo)) {
                                                echo
                                                    '<option>' .  $Datos['marca'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="BotonRegistrarVehiculo">Registrar</button>
                                    
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

</html>