<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST["submit"])){



require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username = 'xrichardx15@gmail.com';                 // SMTP username
    $mail->Password = 'richardanderson25.';                                 // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Variables del index
    $destino = "xrichardx15@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " .$mensaje;

    //Recipients
    $mail->setFrom('xrichardx15@gmail.com', 'Richard');
    $mail->addAddress($destino);     // Add a recipient
  
    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = ('Me estoy contactando con usted ');
    $mail->Body    = $contenido ;
   

    $mail->send();
     
     header("Location:index.html");
} catch (Exception $e) {
    echo "Hubo un error al enviar el correo {$mail->ErrorInfo}";
}
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="enviar-prueba.php">
    <label for="email">Correo Electronico (destinatario)</label>
    <input type="email" name="email" id="email"/>
    <br><br>
    <label for="asunto">Asunto mail:</label>
    <input type="text" name="asunto" id="asunto"/>
    <br><br>
    <label for="mensaje">Escribe tu mensaje</label>
    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
    <hr>
    <button type="submit">Enviar Mensaje</button>
</form>
</body>
</html>