<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//use models\nuevomodel;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/PHPMailerAutoload.php';
require_once 'models/nuevomodel.php';

$mail = new PHPMailer();
$nuevoModel = new NuevoModel();
$correo = trim(stripslashes($_POST['Correo']));
$token = $nuevoModel->insertToken($correo);
if(is_string( $token)){
    try {
        //Server settings
        $mail->SMTPDebug = 0;  
                        // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'zullytamayom@gmail.com';                     // SMTP username
        $mail->Password   = 'tamayo881105.';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('zullytamayom@gmail.com', 'Administrador');
        $mail->addAddress($_POST['Correo']);     // Add a recipient
        

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Recuperacion   '.utf8_decode('   contraseña');
        //$mail->Body    = 'Correo de prueba 3';
        $mail->Body = ' Ingresa al siguiente link y cambia tu '.utf8_decode('contraseña').' . <a href="https://salondebellezatya.herokuapp.com/cambia_pass?token=' . $token . '">Cambiar contrase&ntilde;a</a>';
    

        $mail->send();
        echo 'Mensaje enviado correctamente,revisa tu bandeja de entrada';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
    }
} else {
    echo "El correo no existe en la base de datos!";
}
