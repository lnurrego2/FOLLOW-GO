<!--Incluir Menu-->
<?php include "Menu.php";
include("Conexion_BD/Base_De_Datos.php");
?>
<?php include "Nav.php" ?>
<title>Historial de servicios</title>
<body>
    <div class="Principal_Tablas">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <h4 class="header-title mb-3">Historial de servicios</h4>
                        </div>                       
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha Y Hora</th>
                                    <th>Precauciones</th>
                                    <th>Paciente</th>
                                    <th>Conductor</th>
                                    <th>Placa del Vehiculo</th>
                                    <th>Servicio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM servicioo Where estadoServicio = 'cancelado' || estadoServicio = 'concluido' && id ='" . $_SESSION['id'] . "' order by fecha_hora desc";
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
                                            <?php echo $row['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['nombrec']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['placa']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['estadoServicio']; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br><br>
                        <div class="form-group col-md-3">
                            <a href="../modulos/Reportes_De_Servicios-Pacientes.php" TARGET="_BLANK" class="btn btn-outline-success" name="BotonReportesPaciente">Descargar Reporte</a>
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