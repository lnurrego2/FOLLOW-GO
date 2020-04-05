<!--Incluir Menu-->
<?php include "Menu.php" ?>
<!--Incluir La Base De Datos Para Traer Los Datos-->
<?php include "Conexion_BD/Base_De_Datos.php";

$IdDeConductor = mysqli_query($Conn, "SELECT id FROM usuario WHERE rol = 3");
$LicenciaDeConductor = mysqli_query($Conn, "SELECT CC FROM usuario WHERE rol = 3");



?>
<html lang="es">
<title>Formulario Conductor</title>

<body>
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
                            <a href="Mostrar_Conductor.php" class="btn btn-outline-success" name="BotonRegistroConductor">Consultar</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered m-0">
                            <thead>
                                <tr>
                                    <th>Licencia</th>
                                    <th>Identificación</th>
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
            <div class="col-lg-4">
                <div class="card-box">
                    <div id="donut-chart">
                        <div id="donut-chart-container" class="flot-chart mt-5">
                            <h1>Conductor</h1>
                            <form action="Registrar_Conductor.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress"> Licencia</label> <span class="Obligatorio">*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="licenciaConductor">
                                            <?php
                                            while ($Datos = mysqli_fetch_array($LicenciaDeConductor)) {
                                            ?>
                                                <option><?php echo $Datos['CC'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select></div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Identificación</label> <span class="Obligatorio">*</span>
                                        <select class="form-control" id="exampleFormControlSelect1" name="idConductor">
                                            <?php
                                            while ($Datos = mysqli_fetch_array($IdDeConductor)) {
                                            ?>
                                                <option><?php echo $Datos['id'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categoria</label> <span class="Obligatorio">*</span>
                                    <select class="form-control" id="exampleFormControlSelect1" name="CategoriaConductor" required>
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
                                    <label for="exampleFormControlSelect1">Observaciones</label> <span class="Obligatorio">*</span>
                                    <select class="form-control" id="exampleFormControlSelect1" name="ObservacionesConductor" required>

                                        <option>Discapacidad...</option>
                                        <option value="01">Visual</option>
                                        <option value="02">Auditiva</option>
                                        <option value="03">Motriz</option>
                                        <option value="00">Sin Discapacidad</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="BotonRegistrarConductor">Registrar</button>
                                </div>

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

<!--Script's-->

</html>