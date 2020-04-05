<?php 
include ("Conexion_BD/Base_De_Datos.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM usuario WHERE id = $id";
    $ResultadoEliminarUsuario = mysqli_query($Conn, $query);
    
        if(!$ResultadoEliminarUsuario){
            die ("Fallo");
        }
/*
        $_SESSION['message'] = "Datos Eliminados Correctamente";
        $_SESSION['message_Color'] = "danger";*/
        header ("location: Mostrar_Usuario.php");
}
