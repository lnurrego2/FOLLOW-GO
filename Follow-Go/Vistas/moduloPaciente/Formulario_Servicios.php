<!--Incluir Menu-->
<?php include "Menu.php";

'<!--Incluir La Base De Datos Para Traer Los Datos-->' .

  include "Conexion_BD/Base_De_Datos.php";

$IdDeServicio = mysqli_query($Conn, "SELECT codigoPaciente FROM pacientee");
$IdDeServicio2 = mysqli_query($Conn, "SELECT codigoVehiculo FROM vehiculo");
$IdDeServicio3 = mysqli_query($Conn, "SELECT licencia FROM conductorr");




?>

<title>Formulario Servicios</title>

<body>
  <?php include "Nav.php" ?>


  <div class="Principal_Tablas">
    <div class="row">
      <div class="col-lg-9">
        <div class="card-box">
          <div class="form-row">
            <div class="form-group col-md-9">
              <!--<h4 class="header-title mb-3">Listado de servicios</h4>-->
            </div>
            <div class="form-group col-md-3">
              <a href="Mostrar_Servicio.php" class="btn btn-outline-success" name="BotonRegistroUsuario">Consultar</a>
            </div>
          </div>


          <div class="table-responsive">
            <table class="table table-hover table-centered m-0">
              <thead>
                <tr>
                  <th>Código</th>
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

                $query = "SELECT * FROM servicioo Where estadoServicio != 'cancelado' && id ='" . $_SESSION['id'] . "'";
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
                    <td>
                      <a href="Actualizar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-info">
                        <i class="fas fa-marker"></i></a>
                      <a href="Inhabilitar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-outline-danger">
                        <i class="far fa-trash-alt"></i></a>
                    </td>
                  </tr>
                <?php }

                '<h4 class="m-t-0 header-title">Registro de usuarios</h4>'

                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card-box">
          <div id="donut-chart">
            <div id="donut-chart-container" class="flot-chart mt-5">

              <h1>SERVICIO</h1>
              <form action="Registrar_Servicio.php" method="POST">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Licencia Conductor</label> <span>*</span>
                    <select class="form-control" id="exampleFormControlSelect1" name="LicenciaConductor">
                      <?php
                      while ($Datos = mysqli_fetch_array($IdDeServicio3)) {
                      ?>
                        <option><?php echo $Datos['licencia'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Código Vehiculo</label> <span>*</span>
                    <select class="form-control" id="exampleFormControlSelect1" name="CodigoVehiculo">
                      <?php
                      while ($Datos = mysqli_fetch_array($IdDeServicio2)) {
                      ?>
                        <option><?php echo $Datos['codigoVehiculo'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputAddress">Precauciones</label> <span>*</span>
                  <textarea type="" class="form-control" id="inputAddress" placeholder="" name="PrecaucionesServicio" cols="7" rows="2" required></textarea>
                  <!--<input type="" class="form-control" id="inputAddress" placeholder="" name = "PrecaucionesServicio" required>-->

                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="BotonRegistrarServicio">Registrar</button>
                </div>
                <!--
            <div class="form-group">
              <label for="inputPassword4">Fecha</label> <span>*</span>
              <input type="date" class="form-control" id="inputPassword4" name = "FechaServicio" required>
            </div>
          <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputAddress">Codigo Paciente</label> <span>*</span>
            <select  class="form-control" id="exampleFormControlSelect1" name="CodigoPaciente">
             <?php
              /*
                while ($Datos = mysqli_fetch_array ($IdDeServicio))
                {
                    ?>
                    <option><?php echo $Datos['codigoPaciente'] ?></option>
                    <?php
                }*/
              ?>
            </select>-->


              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</html>