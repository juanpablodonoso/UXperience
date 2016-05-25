<?php
include_once 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hotelsibw@gmail.com';                 // SMTP username
$mail->Password = 'sibw1234';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';

$mail->setFrom('hotelsibw@gmail.com', 'Hotel Plaza Nueva');
$mail->AddAddress('hotelsibw@gmail.com', 'Hotel Plaza Nueva');  // Add a recipient
$mail->AddAddress($_POST['email'], $_POST['name']);  // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Petición de contacto de '.$_POST['name'];
$mail->Body    = $_POST['message'];

//Mostrar mensaje de error o no en la web
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo "<a href='index.php?page=contact'><button class=\"btn btn-primary\">Volver a la pagina de contacto</button></a>";

} else {
    echo '<script>window.location.replace("http://sibw.com/index.php?page=contact");</script>';
}
?>
