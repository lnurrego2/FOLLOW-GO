<?php 

include ("Conexion_BD/Base_De_Datos.php");

if (isset($_POST['BotonRegistrarVehiculo'])){
    $placavehiculo = $_POST ['PlacaVehiculo'];
    $modelovehiculo = $_POST ['ModeloVehiculo'];
    $tipovehiculo = $_POST ['TipoVehiculo'];
    $marcavehiculo = $_POST ['MarcaVehiculo'];

    $query = "INSERT INTO vehiculo (placa, modelo, tipo, marca) 
                VALUES ('$placavehiculo','$modelovehiculo', '$tipovehiculo', '$marcavehiculo')";

    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
/*
    $_SESSION['message'] = "Datos registrados correctamente";
    $_SESSION['message_Color'] = "success";
*/
    header ("location: Formulario_Vehiculos.php");
}
