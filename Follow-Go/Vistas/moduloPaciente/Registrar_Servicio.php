<?php
session_start();
include("Conexion_BD/Base_De_Datos.php");
//$ResultadocodigoP = mysqli_query($Conn, "SELECT codigoPaciente FROM pacientee Where id ='".$_SESSION['id']."'");
//$ResultadoLicencia = mysqli_query($Conn, "SELECT distinct licencia FROM conductor Where nombrec ='" . $_POST['LicenciaConductor'] . "'");
//$ResultadocodigoV = mysqli_query($Conn, "SELECT  distinct codigoVehiculo FROM vehiculo Where tipo  ='" . $_POST['CodigoVehiculo'] . "'");
$query = "SELECT codigoPaciente FROM pacientee Where id ='" . $_SESSION['id'] . "'";
$ResultadocodigoP = mysqli_query($Conn, $query);
while ($row = mysqli_fetch_array($ResultadocodigoP)) {
    $codigopaciente = $row['codigoPaciente'];
}
if (isset($_POST['BotonRegistrarServicio'])) {
    $precaucionesservicio = $_POST['PrecaucionesServicio'];
    $query = "SELECT distinct licencia FROM conductorr Where nombre ='" . $_POST['LicenciaConductor'] . "'";
    $ResultadoLicencia = mysqli_query($Conn, $query);
    while ($row = mysqli_fetch_array($ResultadoLicencia)) {
        $licenciaconductor = $row['licencia'];
    }
    $query = "SELECT  distinct codigoVehiculo FROM vehiculo Where tipo  ='" . $_POST['CodigoVehiculo'] . "'";
    $ResultadocodigoV = mysqli_query($Conn, $query);
    while ($row = mysqli_fetch_array($ResultadocodigoV)) {
        $codigovehiculo = $row['codigoVehiculo'];
        //$codigopaciente = $ResultadocodigoP;
        //$codigopaciente = $_POST ['CodigoPaciente'];
        //$licenciaconductor = $_POST['LicenciaConductor'];
        //$codigovehiculo = $_POST['CodigoVehiculo'];
    }

    $query = "UPDATE paciente SET estadoLimite = '2' WHERE id = '" . $_SESSION['id'] . "' ";

    $query = "INSERT INTO servicio (precauciones, codigoPaciente, licencia, codigoVehiculo) 
    VALUES ('$precaucionesservicio', '$codigopaciente', '$licenciaconductor', '$codigovehiculo')";


    var_dump($query);
    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
    $_SESSION['message'] = "Datos Eviados";
    $_SESSION['message_Color'] = "success";
    header("location: index.php");
}
