<?php

  session_start();

  if($_SESSION['rol'] == 1){
    header('location: ../Vistas/modulos/index.php');
  }else if($_SESSION['rol'] == 2){
    header('location: ../../Vistas/moduloPaciente/index.php');
  }else if($_SESSION['rol'] == 3){
    header('location: ../../Vistas/moduloConductor/index.php');
  }
 ?>
