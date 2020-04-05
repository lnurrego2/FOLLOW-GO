<?php 

include ("Conexion_BD/Base_De_Datos.php");

if (isset($_POST['BotonRegistrarUsuario'])){
    $ccusuario = $_POST ['IdentificacionUsuario'];
    $nombreusuario = $_POST ['NombreUsuario'];
    $apellidousuario = $_POST ['ApellidoUsuario'];
    $direccionusuario = $_POST ['DireccionUsuario'];
    $telefonousuario = $_POST ['TelefonoUsuario'];
    $correousuario = $_POST ['CorreoUsuario'];
    $rolusuario = $_POST ['RolUsuario'];

    $query = "INSERT INTO usuario (CC, nombre, apellido, direccion, telefono, correo, clave, rol) 
                VALUES ('$ccusuario','$nombreusuario', '$apellidousuario', '$direccionusuario', '$telefonousuario', '$correousuario', '$ccusuario', '$rolusuario')";

var_dump($query);

    $Resultado = mysqli_query($Conn, $query);
    if (!$Resultado) {
        die("Fallo La Consulta");
    }
    /*
    $_SESSION['message'] = "Datos registrados correctamente";
    $_SESSION['message_Color'] = "success";*/

    header ("location: Formulario_Usuarios.php");

}
    
    $IdentificacionUsuario = $_POST['IdentificacionUsuario'];
    $NombreUsuario = $_POST['NombreUsuario'];
    $ApellidoUsuario = $_POST['ApellidoUsuario'];
    $CorreoUsuario = $_POST['CorreoUsuario'];
    
    $body = "Bogotá D.C. <br><br> Señor(a): " .$NombreUsuario." ".$ApellidoUsuario. "<br>Identificación: " .$IdentificacionUsuario. "<br> E-mail: " .$CorreoUsuario. "<br><br>Querido usuario la clave para ingresar al sistema es su número de identificación";
    
    
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'followgocolombia@gmail.com';                     // SMTP username
        $mail->Password   = 'FollowGo123';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('followgocolombia@gmail.com');
        $mail->addAddress($CorreoUsuario);  

        // Attachments
        $mail->addAttachment('../img/Logo12.png');         // Add attachments
        $mail->addAttachment('../img/Logo12.png');    // Optional name
            
    
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Clave de acceso a Follow Go';
        $mail->Body    = $body;
    
        $mail->send();
        echo '<script>
                alert("Se envio");
                window.history.go(-1);
                </script>';
    } catch (Exception $e) {
        echo 'Error en el clave: ', $mail->ErrorInfo;
        
    }


