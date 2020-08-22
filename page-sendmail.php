
<?php
if (isset($_POST['correo'] && $_POST['correo'] != "") {
    
    $from           = trim($_POST['correo']);
    $nombre 		= utf8_decode($_POST['nombre']);
    $correo         = utf8_decode($_POST['correo']);
    $telefono       = utf8_decode($_POST['telefono']);
    $ciudad         = utf8_decode($_POST['ciudad']);
    $aplicacion     = utf8_decode($_POST['aplicacion']);
    $mensaje        = utf8_decode($_POST['mensaje']);

    require_once('./PHPMailer/class.phpmailer.php');

    //PHPMailer Object
    $mail = new PHPMailer(true);
    $mail->From = $correo;
    $mail->FromName = $nombre;
    
    $mail->addAddress('tony@blueterrier.mx', 'Mail Unikonfort');
    $mail->addReplyTo("contacto@unikonfort.mx", "Reply");
    // $mail->addBCC("frkalderon@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Contacto Unikonfort";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p>Correo<b>: </b>". $correo ."</p>";
    $mail->Body.= "<p>Telefono<b>: </b>". $telefono ."</p>";
    $mail->Body.= "<p>Ciudad<b>: </b>". $ciudad ."</p>";
    $mail->Body.= "<p>Aplicacion<b>: </b>". $aplicacion ."</p>";
    $mail->Body.= "<p><b>Mensaje: </b>". $mensaje ."</p>";
    
    $mail->AltBody = "Nombre: " . $nombre." // correo: ".$correo." // Telefono: ".$telefono." // Ciudad: ".$ciudad ." // Aplicacion: ".$aplicacion ." // Mensaje: ".$mensaje ." ";

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>¡Gracias!</title>
    <!-- Event snippet for Formulario Enviado conversion page --> 
    <script> gtag('event', 'conversion', {'send_to': 'AW-785473532/yb2FCOid6dkBEPy_xfYC'}); </script>
</head>
<body>

</body>
</html>