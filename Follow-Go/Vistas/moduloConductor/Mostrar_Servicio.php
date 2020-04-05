<!--Incluir Menu-->
<?php include "Menu.php";
include("Conexion_BD/Base_De_Datos.php");
session_start();
//$licenciaCA =  $_SESSION['id'] ); 
//$licenciaCA = $_SESSION['id'];
//$query = "SELECT * FROM servicioc Where estadoServicio ='solicitado' && id = '$licenciaCA' ";
//$query = "SELECT * FROM servicioc Where id = '$licenciaCA' ";
$query = "SELECT * from servicioo Where estadoServicio ='solicitado' && idc ='" . $_SESSION['id'] . "'";
//SELECT * FROM servicio Where estadoServicio ='solicitado' && id. = 4
$ResultadoRegistroServicio = mysqli_query($Conn, $query);

include "Nav.php" ?>
<html lang="Es">
<title>Consulta de servicios</title>

<body>
    <?php
    if (isset($ResultadoRegistroServicio)) { ?>
        <div class="Principal_Tablas">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <h4 class="header-title mb-3">Servicios solicitados</h4>
                            </div>
                        </div>



                        <div class="table-responsive">
                            <table class="table table-info table-striped ">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>Momento de Solicitud</th>
                                        <th>Precauciones</th>
                                        <th>Paciente</th>
                                        <th>Direccion</th>
                                        <th>Placa del Vehi­culo</th>
                                        <th>Tipo de Vehi­culo</th>
                                        <th>Acciones</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    <?php while ($row = mysqli_fetch_array($ResultadoRegistroServicio)) { ?>
                                        <tr>
                                            <td scope="row">
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
                                                <?php echo $row['apellido']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['direccion']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['placa']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['tipo']; ?>
                                            </td>
                             
                                            <td>
                                                <a href="Aceptar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-info">
                                                    <i class="fas fa-marker"></i> Aceptar </a>
                                                <a href="Cancelar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-danger">
                                                    <i class="far fa-trash-alt"></i> Cancelar </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
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