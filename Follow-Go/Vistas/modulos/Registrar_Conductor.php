<?php 

include ("Conexion_BD/Base_De_Datos.php");

if (isset($_POST['BotonRegistrarConductor'])){
    $licenciaconductor = $_POST ['licenciaConductor'];
    $categoriaconductor = $_POST ['CategoriaConductor'];
    $observacionesconductor = $_POST ['ObservacionesConductor'];
    
    $idconductor = $_POST ['idConductor'];
    

    $query = "INSERT INTO conductorr (licencia, id, categoria, observaciones) 
                VALUES ('$licenciaconductor', '$idconductor', '$categoriaconductor', '$observacionesconductor')";

var_dump($query);


    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
/*
    $_SESSION['message'] = "Datos registrados correctamente";
    $_SESSION['message_Color'] = "success";*/

    header ("location: Formulario_Conductor.php");

}
