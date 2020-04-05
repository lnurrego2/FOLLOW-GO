<?php include "Menu.php";
include "Nav.php";
include("Conexion_BD/Base_De_Datos.php");
$limiteServicio = 0;
?>
<html lang="Es">
<title>Servicio Actual</title>


<body>
  <header> </header>
  <br><br><br><br><br><br>

  <?php $query = "SELECT * from servicioo Where estadoServicio ='aceptado' && idc ='" . $_SESSION['id'] . "'";
  $servicioActivo = mysqli_query($Conn, $query);
  while ($row = mysqli_fetch_array($servicioActivo)) {
    if ($limiteServicio <= 1) {
      # code...

      $limiteServicio++;
  ?>
      <div>
        <div class="row">
          <div class="col-2">
            <br><br><br><br>
            <div class="col-md-12">
              <div class="card border-success m-b-30">
                <div class="card-body text-success">
                  <h5 class="card-title">Precauciones en los servicios</h5>
                  <p class="card-text"> <?php echo $row['precauciones'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="row">
              <div class="col-md-12">

                <h5 class="m-t-20 m-b-30"> Servicio # <?php echo $limiteServicio ?></h5>
                <div class="card m-b-30 text-secondary bg-white text-xs-center">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#"><?php echo $row['fecha_hora'] ?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="#"> <?php echo $row['nombre'].' '. $row['apellido']; ?> </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#"><?php echo $row['placa'] ?> </a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"> El Paciente ya resivio la totalidad de sus servicios? </h5>
                    <p class="card-text">
                      <p class="card-text">Recuerda dar por concluido los servicios que presta para poder realizar mas.</p>
                    </p>
                    <div class="row">
                      <div class="col-md-9">
                        <a href="Concluir_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-custom waves-effect waves-light">
                          <i class="fas fa-marker"> Concluir Servicio </i></a>
                      </div>
                      <div class="col-md-2">
                        <a href="Cancelar_Servicio.php?codigoServicio=<?php echo $row['codigoServicio'] ?>" class="btn btn-danger waves-effect waves-light">
                          <i class="far fa-trash-alt"></i> Cancelar </a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-2">
            <br><br><br><br>
            <div class="col align-self-center">
              <div class="card m-b-30 text-white bg-success text-xs-center">
                <div class="card-body">
                <h5 class="card-title"> <?php echo $row['placa'].' <br> <br> '. $row['tipo']; ?></h5>
                  <blockquote class="card-bodyquote">
                    <p><b><?php echo $row['marca'].'</b> modelo '. $row['modelo']; ?> </p>
                    <img src="../img/Logo111.png" alt="" height="50" class="logo-large">
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php }
  } ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>

</html>