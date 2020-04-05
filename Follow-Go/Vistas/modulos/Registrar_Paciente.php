<?php 

include ("Conexion_BD/Base_De_Datos.php");

if (isset($_POST['BotonRegistrarPaciente'])){
    $rhpaciente = $_POST ['RHPaciente'];
    $discapacidadpaciente = $_POST ['DiscapacidadPaciente'];
    $idpaciente = $_POST ['idPaciente'];


    $query = "INSERT INTO paciente (rh, discapacidad, id) 
                VALUES ('$rhpaciente', '$discapacidadpaciente', '$idpaciente')";

    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
    /*
    $_SESSION['message'] = "Datos registrados correctamente";
    $_SESSION['message_Color'] = "success";
*/
    header ("location: Formulario_Pacientes.php");
}
