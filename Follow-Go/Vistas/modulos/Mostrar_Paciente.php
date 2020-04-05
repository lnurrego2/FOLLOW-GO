<!--Incluir Menu-->
<?php include "Menu.php" ?>

<?php

include("Conexion_BD/Base_De_Datos.php");

?>
<html lang="Es">
<title>Consulta de pacientes</title>

<body>
    <?php include "Nav.php" ?>

    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-sm-12">
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

</body>

<!--Script's-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</html>