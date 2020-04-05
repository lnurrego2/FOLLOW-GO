<!--Incluir Menu-->
<?php
include "Menu.php";
include("Conexion_BD/Base_De_Datos.php");

$query = "SELECT * FROM pacientee Where estadoUsuario = 1";
$ResultadoRegistroPacientes = mysqli_query($Conn, $query);

include "Nav.php" ?>
<html lang="Es">
<body>


    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">

                    <h4 class="header-title mb-3">Reportes de Pacientes Activos</h4>


                    <div class="table-responsive">

                        <section>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Identificación</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Dirección</th>
                                        <th>Télefono</th>
                                        <th>Correo</th>
                                        <th>RH (Tipo de sangre)</th>
                                        <th>Discapacidad</th>

                                        <!--<th>Id</th>
                                         <th>Acciones</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php


                                    while ($row = mysqli_fetch_array($ResultadoRegistroPacientes)) {
                                        echo '<tr>

                                        <td>' . $row['codigoPaciente'] . '</td>
                                        <td>' . $row['CC'] . '</td>
                                        <td>' . $row['nombre'] . '</td>
                                        <td>' . $row['apellido'] . '</td>
                                        <td>' . $row['direccion'] . '</td>
                                        <td>' . $row['telefono'] . '</td>
                                        <td>' . $row['correo'] . '</td>
                                        <td>' . $row['rh'] . '</td>
                                        <td>' . $row['discapacidad'] . '</td>

                                        </tr>';
                                    } ?>
                                </tbody>
                            </table>
                        </section>

                        <form method="post" class="form" action="ReportePaciente.php">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                <label class="btn btn-light" for="exampleFormControlSelect1">
                                    <select class="btn btn-light" id="exampleFormControlSelect1" name="RHPaciente" required>
                                        <option disabled selected>RH</option>
                                        <option value="ABp">AB+</option>
                                        <option value="ABn">AB-</option>
                                        <option value="Ap">A+</option>
                                        <option value="An">A-</option>
                                        <option value="Bp">B+</option>
                                        <option value="Bn">B-</option>
                                        <option value="Op">O+</option>
                                        <option value="On">O-</option>
                                    </select>
                                </label>
                                <!--    
                                <label class="btn btn-light ">
                                    <input type="text" name="nombre" class="btn btn-outline-info btn-sm" placeholder="Nombre">
                                </label>
                               
                                <label class="btn btn-light">
                                    <input type="text" name="apellido" class="btn btn-outline-info btn-sm" placeholder="Apellido">
                                </label>
                                -->
                                <label class="btn btn-light active">
                                    <input type="submit" name="generar_reporte" class="btn btn-outline-success btn-sm" value="Descargar" checked>
                                </label>
                            </div>
                        </form>
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