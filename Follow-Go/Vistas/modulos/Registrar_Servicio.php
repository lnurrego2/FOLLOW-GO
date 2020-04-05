<?php 

include ("Conexion_BD/Base_De_Datos.php");

if (isset($_POST['BotonRegistrarServicio'])){
    $precaucionesservicio = $_POST ['PrecaucionesServicio'];
    $codigopaciente = $_POST ['CodigoPaciente'];
    $licenciaconductor = $_POST ['LicenciaConductor'];
    $codigovehiculo = $_POST ['CodigoVehiculo'];



    $query = "INSERT INTO servicio (precauciones, codigoPaciente, licencia, codigoVehiculo) 
                VALUES ('$precaucionesservicio', '$codigopaciente', '$licenciaconductor', '$codigovehiculo')";

var_dump($query);

    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
    /*
    $_SESSION['message'] = "Datos registrados correctamente";
    $_SESSION['message_Color'] = "success";
*/
    header ("location: Formulario_Servicios.php");


}
