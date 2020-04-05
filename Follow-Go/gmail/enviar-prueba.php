<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];

$body = "Nombre: " .$nombre . "<br>Correo: ".$correo . "<br>Telefono: " . $telefono . "<br>clave: " .$clave;




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

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
    $mail->addAddress($correo);  
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto';
    $mail->Body    = $body;

    $mail->send();
    echo '<script>
            alert("Se envio");
            window.history.go(-1);
            </script>';
} catch (Exception $e) {
    echo 'Error en el clave: ', $mail->ErrorInfo;
    
}
?>