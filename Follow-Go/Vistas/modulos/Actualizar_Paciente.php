<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include("Conexion_BD/Base_De_Datos.php");

if (isset($_GET['codigoPaciente'])) {
    $id = $_GET['codigoPaciente'];


    $query = "SELECT * FROM paciente WHERE codigoPaciente = $id";
    $ResultadoPacienteActualizar = mysqli_query($Conn, $query);

    if (mysqli_num_rows($ResultadoPacienteActualizar) == 1) {
        $row = mysqli_fetch_array($ResultadoPacienteActualizar);
        $idpaciente = $row['codigoPaciente'];
        $rhpaciente = $row['rh'];
        $discapacidadpaciente = $row['discapacidad'];
        $idusuario = $row['id'];


    }
}

if (isset($_POST['BotonActualizarPaciente'])) {
    $id = $_GET['id'];
    $idpaciente = $_POST['Actualizarid'];
    $rhpaciente = $_POST['ActualizarRH'];
    $discapacidadpaciente = $_POST['ActualizarDiscapacidad'];
    $idusuario = $_POST['ActualizarID'];

    $query = "UPDATE pacientee set rh = '$rhpaciente', discapacidad = '$discapacidadpaciente', id = '$idusuario'
     WHERE codigoPaciente = '$idpaciente'";
    mysqli_query($Conn, $query);
    header("location: Mostrar_Usuario.php");
}





?>
<title>Actualizacion Pacientes</title>
<?php include "Nav.php" ?>

    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-box">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <h4 class="header-title mb-3">Listado de pacientes</h4>
                        </div>
                        <div class="form-group col-md-3">
                            <a href="Formulario_Pacientes.php" class="btn btn-outline-primary" name="BotonRegistro">Registrar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>
                                    <th>Código Del Paciente</th>
                                    <th>RH (Tipo de sangre)</th>
                                    <th>Discapacidad</th>
                                    <th>Identificación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM pacientee Where estadoUsuario = 1";
                                $ResultadoRegistroPacientes = mysqli_query($Conn, $query);

                                while ($row = mysqli_fetch_array($ResultadoRegistroPacientes)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['codigoPaciente']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['rh']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['discapacidad']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id']; ?>
                                        </td>
                                        <td>
                                            <a href="Actualizar_Paciente.php?codigoPaciente=<?php echo $row['codigoPaciente'] ?>" class="btn btn-outline-info">
                                                <i class="fas fa-marker"></i></a>
                                            <a href="Eliminar_Paciente.php?codigoPaciente=<?php echo $row['codigoPaciente'] ?>" class="btn btn-outline-danger">
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
                        <h1>PACIENTE</h1>
                        <form action="Actualizar_Paciente.php?codigoPaciente=<?php echo $_GET['codigoPaciente'];  ?>" METHOD="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="Actualizarid" value="<?php echo $idpaciente; ?>" class="form-control" placeholder="Actualzar el Id" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" name="ActualizarRH" value="<?php echo $rhpaciente; ?>" class="form-control" placeholder="Actualizar la Cedula" disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarDiscapacidad" value="<?php echo $discapacidadpaciente; ?>" class="form-control" placeholder="Actualizar la discapacidad" rows="2">
                            </div>
                            <div class="form-group">
                                <input type="text" name="ActualizarID" value="<?php echo $idusuario; ?>" class="form-control" placeholder="Actualizar el Apellido" disabled>
                            </div>
                            <button type="submit" class="btn btn-outline-dark btn-lg btn-block" name="BotonActualizarPaciente">
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