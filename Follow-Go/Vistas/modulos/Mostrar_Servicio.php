<!--Incluir Menu-->
<?php include "Menu.php";

include("Conexion_BD/Base_De_Datos.php");

$query = "SELECT * FROM servicioo Order by fecha_hora";
$ResultadoRegistroServicio = mysqli_query($Conn, $query);

include "Nav.php" ?>
<html lang="ES">
<title>Historial de Servicios</title>

<body>

    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="form-row">
                    <div class="form-group col-md-9">
                            <h4 class="header-title mb-3">Historial de Servicios</h4>
                        </div>
                    

                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>
                                    <th>Fecha Y Hora</th>
                                    <th>Precauciones</th>
                                    <th>Paciente</th>
                                    <th>Conductor</th>
                                    <th>Placa del Vehículo</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($ResultadoRegistroServicio)) {

                                    echo '<tr>
                                    <td>' . $row['fecha_hora'] . '</td>
                                    <td>' . $row['precauciones'] . '</td>
                                    <td>' . $row['nombre'] . '</td>
                                    <td>' . $row['nombrec'] . '</td>
                                    <td>' . $row['placa'] . '</td>
                                    <td>' . $row['estadoServicio'] . '</td>
    
                                    <td>
                                        <a href="Actualizar_Servicio.php?codigoServicio=' . $row['codigoServicio'] . '" class="btn btn-outline-info"><i class="fas fa-marker"></i></a>
                                        <a href="Eliminar_Servicio.php?codigoServicio=' . $row['codigoServicio'] . '" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</body>
<!--Script's-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</html>