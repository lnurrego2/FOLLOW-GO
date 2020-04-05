<?php

include("Conexion_BD/Base_De_Datos.php");

if (isset($_GET['licencia'])) {
    $id = $_GET['licencia'];

    $query = "DELETE FROM conductor WHERE licencia = $id";
    $ResultadoEliminarConductor = mysqli_query($Conn, $query);

    if (!$ResultadoEliminarConductor) {
        die("Fallo");
    }
    /*
        $_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
    header("location: Mostrar_Conductor.php");
}
