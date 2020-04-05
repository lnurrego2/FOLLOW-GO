<!--Incluir Menu-->
<?php include "Menu.php";
include "Conexion_BD/Base_De_Datos.php";
include "Nav.php";

$IdDeServicio = mysqli_query($Conn, "SELECT codigoPaciente FROM pacientee");
$IdDeServicio2 = mysqli_query($Conn, "SELECT codigoVehiculo FROM vehiculo");
$IdDeServicio3 = mysqli_query($Conn, "SELECT nombre FROM conductorr Where estadoUsuario = 1");

$tipoVehiculo = mysqli_query($Conn, "SELECT distinct tipo FROM vehiculo Where estadoVehiculo = 1");
$marcaVehiculo = mysqli_query($Conn, "SELECT  distinct marca FROM servicioo ");

$estadoLimitep = mysqli_query($Conn, "SELECT estadoLimite FROM pacientee Where id ='" . $_SESSION['id'] . "' ");


?>

<title>Solicitud de Servicio</title>

<body><?php
        $query = "SELECT * from pacientee Where id ='" . $_SESSION['id'] . "'";
        $pacienteSolicitante = mysqli_query($Conn, $query);
        while ($row = mysqli_fetch_array($pacienteSolicitante)) {

            # code...
        ?>
        <div>
            <div class="row">
                <div class="col-2">
                    <br><br><br><br><br><br><br><br>
                    <div class="col-md-12">
                        <div class="card border-success m-b-30">
                            <div class="card-body card-light text-secondary">
                                <h5 class="card-title">Datos Personales</h5>
                                <p class="card-text"> <?php echo $row['CC'] ?></p>
                                <p class="card-text"> <?php echo $row['nombre'] . ' ' . $row['apellido'] ?></p>
                                <p class="card-text"> <?php echo $row['direccion'] ?></p>
                                <p class="card-text"> <?php echo $row['telefono'] ?></p>
                                <p class="card-text"> <?php echo $row['correo'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-7">
                    <div class="row">
                        <div class="col-md-12">
                            <br><br><br><br><br><br><br><br><br><br><br><br>

                            <?php while ($Datos = mysqli_fetch_array($estadoLimitep)) {

                                if ($Datos['estadoLimite']  == 1) { ?>

                                    <div class="card m-b-30 text-secondary bg-white text-xs-center">
                                        <h1 class="m-t-20 m-b-30">Seleccione un conductor y un vehiculo</h1>
                                        <form action="Registrar_Servicio.php" method="POST">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#"><?php echo $row['direccion'] ?></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#"> <?php echo $row['nombre'] . ' ' . $row['apellido']; ?> </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#"><?php echo $row['correo'] ?> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress" class="card-text">Puede confiar plenamente en nuestros conductores</label> <span></span>
                                                        <select class="form-control btn btn-outline-light btn-lg" id="exampleFormControlSelect1" name="LicenciaConductor">
                                                        <?php
                                                            while ($Datos = mysqli_fetch_array($IdDeServicio3)) {
                                                    
                                                            echo 
                                                                '<option>'. $Datos['nombre'] .'</option>'
                                                            ;}
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress" class="card-text">Seleccione el tipo de vehiculo que mejor se acomode a sus necesidades</label> <span></span>
                                                        <select class="form-control btn btn-outline-light btn-lg" id="exampleFormControlSelect1" name="CodigoVehiculo">
                                                            <?php
                                                            while ($Datos = mysqli_fetch_array($tipoVehiculo)) {
                                                    
                                                            echo 
                                                                '<option>'. $Datos['tipo'] .'</option>'
                                                            ;}
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress" class="card-text"> Alguna precaucion a tener en cuenta</label> <span></span>
                                                    <textarea type="" class="form-control btn btn-outline-light btn-lg" id="inputAddress" placeholder="" name="PrecaucionesServicio" cols="7" rows="2" required></textarea>
                                                    <!--<input type="" class="form-control" id="inputAddress" placeholder="" name = "PrecaucionesServicio" required>-->
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-custom waves-effect waves-light btn-block class=" btn btn-custom waves-effect waves-light" name="BotonRegistrarServicio">Registrar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <?php } else {

                                    $query = "SELECT * from servicioo Where id ='" . $_SESSION['id'] . "'";
                                    $servicioNo = mysqli_query($Conn, $query);
                                    while ($row = mysqli_fetch_array($servicioNo)) {
                                    ?>

                                        <h5 class="m-t-20 m-b-30">En estos momentos no puede pedir otro servicio</h5>
                                        <div class="card m-b-30 text-secondary bg-white text-xs-center">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#">Ultimo Servicio solicitado<?php echo $row['fecha_hora'] ?></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#"> <?php echo $row['nombre'] . ' ' . $row['apellido']; ?> </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#"><?php echo $row['placa'] . ' ' . $row['nombrec'] ?> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"> El Paciente ya resivio la totalidad de sus servicios? </h5>
                                                <p class="card-text">
                                                    <p class="card-text">Recuerda dar por concluido los servicios que presta para poder realizar mas.</p>
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <a href="index.php" class="btn btn-success waves-effect waves-light">
                                                            <i class="fas fa-marker"> Concluir Servicio </i></a>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="Inhabilitar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-danger waves-effect waves-light">
                                                            <i class="far fa-trash-alt"></i> Cancelar solicitud del Servicio </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php  }
                                }
                            } ?>
                        </div>
                    </div>
                </div>


                <div class="col-3">
                    <br><br><br><br><br><br><br><br>
                    <div class="col align-self-center">
                        <div class="card m-b-30 text-white bg-success text-xs-center">
                            <div class="card-body">
                                <h4 class="card-title"> Servicios previos</h4>
                                <blockquote class="card-bodyquote">
                                    <table class="table table-hover table-centered m-0">
                                        <thead>
                                            <tr>

                                                <th>Fecha</th>
                                                <th>Conductor</th>
                                                <th>Vehiculo</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM servicioo Where estadoServicio = 'concluido' && id ='" . $_SESSION['id'] . "' order by fecha_hora desc  Limit 1,2";
                                            $ResultadoRegistroServicio = mysqli_query($Conn, $query);
                                            while ($row = mysqli_fetch_array($ResultadoRegistroServicio)) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['fecha_hora']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nombrec']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['tipo'] . ' ' . $row['placa']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <img src="../img/Logo111.png" alt="" height="50" class="logo-large">
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>