<?php

include("Conexion_BD/Base_De_Datos.php");

if (isset($_GET['codigoPaciente'])) {
    $id = $_GET['codigoPaciente'];

    $query = "DELETE FROM paciente WHERE codigoPaciente = $id";
    $ResultadoEliminarUsuario = mysqli_query($Conn, $query);

    if (!$ResultadoEliminarUsuario) {
        die("Fallo");
    }

    /*$_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
    header("location: Mostrar_Paciente.php");
}
