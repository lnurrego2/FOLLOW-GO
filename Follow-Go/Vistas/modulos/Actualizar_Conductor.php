<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include("Conexion_BD/Base_De_Datos.php");

if (isset($_GET['licencia'])) {
    $id = $_GET['licencia'];


    $query = "SELECT * FROM conductorr WHERE licencia = $id";
    $ResultadoConductorActualizar = mysqli_query($Conn, $query);

    if (mysqli_num_rows($ResultadoConductorActualizar) == 1) {
        $row = mysqli_fetch_array($ResultadoConductorActualizar);
        $idconductor= $row['id'];
        $licenciaconductor = $row['licencia'];
        $categoriaconductor = $row['categoria'];
        $observacionesconductor = $row['observaciones'];
    }
}

if (isset($_POST['BotonActualizarConductor'])) {
    $id = $_GET['licencia'];
    $idconductor = $_POST['ActualizarCC_Conductor'];
    $licenciaconductor = $_POST['ActualizarLicencia_Conductor'];
    $categoriaconductor = $_POST['ActualizarCategoria_Conductor'];
    $observacionesconductor = $_POST['ActualizarObservaciones_Conductor'];

    $query = "UPDATE conductorr set id = '$idconductor', categoria = '$categoriaconductor',
                                       observaciones = '$observacionesconductor' WHERE licencia = '$licenciaconductor'";
    mysqli_query($Conn, $query);
    header("location: Mostrar_Conductor.php");
}





?>
<title>Actualizacion Conductores</title>
<?php include "Nav.php" ?>
    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <h4 class="header-title mb-3">Listado de conductores</h4>
                        </div>
                        <div class="form-group col-md-3">
                            <a href="Formulario_Conductor.php" class="btn btn-outline-primary" name="BotonRegistroUsuario">Registrar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>
                                    <th>Licencia</th>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Observaciones</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM conductorr Where estadoUsuario = 1";
                                $ResultadoRegistroConductor = mysqli_query($Conn, $query);

                                while ($row = mysqli_fetch_array($ResultadoRegistroConductor)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['licencia']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['categoria']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['observaciones']; ?>
                                        </td>

                                        <td>
                                            <a href="Actualizar_Conductor.php?licencia=<?php echo $row['licencia'] ?>" class="btn btn-outline-info">
                                                <i class="fas fa-marker"></i></a>
                                            <a href="Eliminar_Conductor.php?licencia=<?php echo $row['licencia'] ?>" class="btn btn-outline-danger">
                                                <i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-4">
            <div class="card-box">
                <div id="donut-chart">
                    <div id="donut-chart-container" class="flot-chart mt-5">
                        <h1>CONDUCTOR</h1>
                        <form action="Actualizar_Conductor.php?licencia=<?php echo $_GET['licencia'];  ?>" METHOD="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarCC_Conductor" value="<?php echo $idconductor; ?>" class="form-control" placeholder="Actualzar el Id" disabled >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarLicencia_Conductor" value="<?php echo $licenciaconductor; ?>" class="form-control" placeholder="Actualizar la Cedula" disabled >
                            </div>
                            <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="ActualizarCategoria_Conductor" value="<?php echo $categoriaconductor; ?> required>
                                        <option value="A1">Motocicletas... (A1)</option>
                                        <option value="A2">Motocicletas... (A2)</option>
                                        <option value="B1">Automóviles... (B1)</option>
                                        <option value="B2">Camiones... (B2)</option>
                                        <option value="B3">Buses Articulados... (B3)</option>
                                        <option value="C1">Microbuses Públicos... (C1)</option>
                                        <option value="C2">Buses Públicos... (C2)</option>
                                        <option value="C3">Vehículos Articulados Públicos... (C3)</option>
                                    </select>
                                    </div>
                        
                            <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="ActualizarObservaciones_Conductor"  value="<?php echo $observacionesconductor; ?>" required>

                                        <option>Discapacidad...</option>
                                        <option value="01">Visual</option>
                                        <option value="02">Auditiva</option>
                                        <option value="03">Motriz</option>
                                        <option value="00">Sin Discapacidad</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-outline-dark btn-lg btn-block" name="BotonActualizarConductor">
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