<?php 
include ("Conexion_BD/Base_De_Datos.php");

    if (isset($_GET['id'])){
        $id = $_GET['id']; 

    $query = "UPDATE usuario set estadoUsuario = 0 WHERE id = '$id'"; 
    $ResultadoEliminarUsuario = mysqli_query($Conn, $query);
    
        if(!$ResultadoEliminarUsuario){
            die ("Fallo");
        }
/*
        $_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
        header ("location: Mostrar_Usuario.php");
}
