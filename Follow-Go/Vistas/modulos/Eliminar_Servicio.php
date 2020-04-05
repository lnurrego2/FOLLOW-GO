<?php 

include ("Conexion_BD/Base_De_Datos.php");

    if (isset($_GET['codigoServicio'])){
        $id = $_GET['codigoServicio'];

    $query = "DELETE FROM servicio WHERE codigoServicio = $id";
    $ResultadoEliminarUsuario = mysqli_query($Conn, $query);
    
        if(!$ResultadoEliminarUsuario){
            die ("Fallo");
        }

        /*$_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
        header ("location: Mostrar_Servicio.php");
}
