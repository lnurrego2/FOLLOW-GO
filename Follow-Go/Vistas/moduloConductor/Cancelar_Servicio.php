<?php 
include ("Conexion_BD/Base_De_Datos.php");

    if (isset($_GET['codigoServicio'])){
        $id = $_GET['codigoServicio']; 

    $query = "UPDATE servicioo set estadoServicio = 'cancelado' WHERE codigoServicio = '$id'"; 
    $ResultadoEliminarUsuario = mysqli_query($Conn, $query);
    
        if(!$ResultadoEliminarUsuario){
            die ("Fallo");
        }

        $_SESSION['message'] = "Servicio Cancelado Correctamente";
        $_SESSION['message_Color'] = "danger";

        header ("location: Mostrar_Servicio.php");
}
