<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include("Conexion_BD/Base_De_Datos.php");


$tipoVehiculo = mysqli_query($Conn, "SELECT tipo FROM detalles");
$marcaVehiculo = mysqli_query($Conn, "SELECT marca FROM detalles");

if (isset($_GET['codigoVehiculo'])) {
    $id = $_GET['codigoVehiculo'];
    $query = "SELECT * FROM vehiculo WHERE codigoVehiculo = $id";
    $ResultadoVehiculoActualizar = mysqli_query($Conn, $query);

    if (mysqli_num_rows($ResultadoVehiculoActualizar) == 1) {
        $row = mysqli_fetch_array($ResultadoVehiculoActualizar);
        $idvehiculo = $row['codigoVehiculo'];
        $placavehiculo = $row['placa'];
        $modelovehiculo = $row['modelo'];
        $tipovehiculo = $row['tipo'];
        $marcavehiculo = $row['marca'];
    }
}
if (isset($_POST['BotonActualizarVehiculo'])) {
    $id = $_GET['codigoVehiculo'];
    $placavehiculo = $_POST['ActualizarPlaca'];
    $modelovehiculo = $_POST['ActualizarModelo'];
    $tipovehiculo = $_POST['ActualizarTipo'];
    $marcavehiculo = $_POST['ActualizarMarca'];

    $query = "UPDATE vehiculo set placa = '$placavehiculo', modelo = '$modelovehiculo', tipo = '$tipovehiculo', 
                                    marca = '$marcavehiculo'  WHERE codigoVehiculo = '$idvehiculo'";
    mysqli_query($Conn, $query);
    header("location: Mostrar_Vehiculos.php");
}
?>
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

        <div class="col-lg-4">
            <div class="card-box">
                <div id="donut-chart">
                    <div id="donut-chart-container" class="flot-chart mt-5">
                        <h1>Vehiculos</h1>
                        <form action="Actualizar_Vehiculo.php?codigoVehiculo=<?php echo $_GET['codigoVehiculo'];  ?>" METHOD="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarPlaca" value="<?php echo $placavehiculo; ?> " class="form-control" disabled>
                            </div>
                            <div class="form-group col-lg-6">
                                        <select class="form-control" id="exampleFormControlSelect1" name="ActualizarModelo" value="<?php echo $modelovehiculo; ?>" required>
                                            <option disabled selected>----</option>;
                                            <?php
                                            for ($i = 1975; $i <= 2021; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            } ?>
                                        </select>
                                    </div>
                            
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="exampleFormControlSelect1"  name="ActualizarTipo" value="<?php echo $tipovehiculo; ?>" required>
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
                                        <select class="form-control" id="exampleFormControlSelect1" name="ActualizarMarca" value="<?php echo $marcavehiculo; ?>" required>
                                            <option disabled selected>----</option>;
                                            <?php
                                            while ($Datos = mysqli_fetch_array($marcaVehiculo)) {
                                                echo
                                                    '<option>' .  $Datos['marca'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                            <button type="submit" class="btn btn-outline-dark btn-lg btn-block" name="BotonActualizarVehiculo">
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