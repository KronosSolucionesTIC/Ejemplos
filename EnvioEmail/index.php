<?php
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';

// Crea una instancia de PHPMailer
$mail = new PHPMailer;

// Configura el uso de SMTP
$mail->isSMTP();
$mail->Host = 'servidor_smtp'; // Cambia 'servidor_smtp' por la dirección del servidor SMTP que estés utilizando
$mail->Port = 587; // Puerto SMTP (puede variar según la configuración del servidor)
$mail->SMTPAuth = true;
$mail->Username = 'tu_correo_electronico'; // Cambia 'tu_correo_electronico' por tu dirección de correo electrónico
$mail->Password = 'tu_contraseña'; // Cambia 'tu_contraseña' por tu contraseña de correo electrónico

// Configura el contenido del correo electrónico
$mail->setFrom('tu_correo_electronico', 'Tu Nombre'); // Cambia 'tu_correo_electronico' por tu dirección de correo electrónico y 'Tu Nombre' por tu nombre
$mail->addAddress('correo_destinatario', 'Nombre Destinatario'); // Cambia 'correo_destinatario' por la dirección de correo del destinatario y 'Nombre Destinatario' por el nombre del destinatario
$mail->Subject = 'Asunto del correo'; // Asunto del correo electrónico
$mail->Body = 'Contenido del correo'; // Contenido del correo electrónico

// Envía el correo electrónico y verifica si se envió correctamente
if (!$mail->send()) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
} else {
    echo 'Correo enviado correctamente.';
}
?>
