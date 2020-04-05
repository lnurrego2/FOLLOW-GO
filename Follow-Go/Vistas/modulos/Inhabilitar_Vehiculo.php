<?php 

include ("Conexion_BD/Base_De_Datos.php");

    if (isset($_GET['codigoVehiculo'])){
        $id = $_GET['codigoVehiculo'];

        $query = "UPDATE vehiculo set estadoVehiculo = 0 WHERE codigoVehiculo = '$id'"; 
        $ResultadoEliminarUsuario = mysqli_query($Conn, $query);
    
        if(!$ResultadoEliminarUsuario){
            die ("Fallo");
        }

        /*$_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
        header ("location: Mostrar_Vehiculos.php");
}
