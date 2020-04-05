<?php include "Menu.php"?>

<title>Solicitud de Servicio</title>


<body>
  <div class="Principal_Vehiculos">
  <?php include "Nav.php" ?>

  <div class="form-row">

<div class="form-group col-md-9">
<p></p>
</div>
      <div class="form-group col-md-1">
      <a href="Mostrar_Servicio.php" class="btn btn-outline-success"  id = "Consultar" name = "BotonConsultarServicio">Consultar</a>
    </div>
    </div>

    <h1>SERVICIO</h1>
      <br>
        <form action = "Registrar_Servicio.php" method = "POST">
        <!--
            <div class="form-group">
              <label for="inputPassword4">Fecha</label> <span>*</span>
              <input type="date" class="form-control" id="inputPassword4" name = "FechaServicio" required>
            </div>-->
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Codigo Paciente</label> <span>*</span>
              <input type="number"  class="form-control" id="inputEmail4" name = "CodigoPaciente" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Licencia Conductor</label> <span>*</span>
              <input type="number" class="form-control" id="inputPassword4" name = "LicenciaConductor" placeholder="CC" required>
   
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Codigo Vehiculo</label> <span>*</span>
            <input type="number" class="form-control" id="inputAddress" placeholder="" name = "CodigoVehiculo" required>
          </div>

          <div class="form-group">
            <label for="inputAddress">Precauciones</label> <span>*</span>
            <textarea type="" class="form-control" id="inputAddress" placeholder="" name = "PrecaucionesServicio" cols="7" rows="2" required></textarea>
            <!--<input type="" class="form-control" id="inputAddress" placeholder="" name = "PrecaucionesServicio" required>-->

          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-outline-primary btn-lg btn-block" name = "BotonRegistrarServicio">Registrar</button>
          </div>
          </div>
          </div> </form>
  </div>




  
</body>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a81368914c.js"></script>





</html>