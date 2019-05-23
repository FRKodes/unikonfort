<?php
if ( isset($_POST['email']) && $_POST['email'] != "") {
    
    $from                   = trim($_POST['email']);

    $tipo_proyecto          = utf8_decode($_POST['tipo_proyecto']);
    $ubicacion              = utf8_decode($_POST['ubicacion']);
    $individual             = utf8_decode($_POST['individual']);
    $matrimonial            = utf8_decode($_POST['matrimonial']);
    $queen_size             = utf8_decode($_POST['queen_size']);
    $king_size              = utf8_decode($_POST['king_size']);
    $detalles_proyecto      = utf8_decode($_POST['detalles_proyecto']);
    $nombre                 = utf8_decode($_POST['nombre']);
    $ciudad                 = utf8_decode($_POST['ciudad']);
    $telefono               = utf8_decode($_POST['telefono']);
    $email                  = utf8_decode($_POST['email']);

    $medida                 = $individual . " / " . $matrimonial . " / " .  $queen_size . " / " .  $king_size;

    

    require_once('./PHPMailer/class.phpmailer.php');

    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    
    $mail->addAddress('frkalderon@gmail.com', 'Mail Unikonfort');
    $mail->addReplyTo("contacto@unikonfort.mx", "Reply");
    
    $mail->addBCC("frkalderon@gmail.com");
    
    $mail->isHTML(true);
    $mail->Subject = "Contacto Unikonfort Hoteleros";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p>Email<b>: </b>". $email ."</p>";
    $mail->Body.= "<p><b>Ciudad: </b>". $ciudad ."</p>";
    $mail->Body.= "<p><b>Telefono: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>Tipo de proyecto: </b>". $tipo_proyecto ."</p>";
    $mail->Body.= "<p><b>Ubicación: </b>". $ubicacion ."</p>";
    $mail->Body.= "<p><b>Medida: </b>". $medida ."</p>";
    $mail->Body.= "<p><b>Detalles del proyecto: </b>". $detalles_proyecto ."</p>";
    
    
    $mail->AltBody = "Nombre: " . $nombre;
    $mail->AltBody .= " // " . $ciudad;
    $mail->AltBody .= " // " . $telefono;
    $mail->AltBody .= " // " . $email;
    $mail->AltBody .= " // " . $tipo_proyecto;
    $mail->AltBody .= " // " . $ubicacion;
    $mail->AltBody .= " // " . $individual;
    $mail->AltBody .= " // " . $matrimonial;
    $mail->AltBody .= " // " . $queen_size;
    $mail->AltBody .= " // " . $king_size;
    $mail->AltBody .= " // " . $detalles_proyecto;
    

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}else{
    echo "nothing at all";
}