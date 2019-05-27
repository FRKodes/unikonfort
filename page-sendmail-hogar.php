<?php
if (isset($_POST['email']) && $_POST['email'] != "") {
    
    $from                   = trim($_POST['email']);
    $firmeza                = utf8_decode($_POST['firmeza']);
    $peso                   = utf8_decode($_POST['peso']);
    $solo_acompanado        = utf8_decode($_POST['solo_acompanado']);
    $peso_pareja            = utf8_decode($_POST['peso_pareja']);
    $preferencia_colchon    = utf8_decode($_POST['preferencia_colchon']);
    $individual             = utf8_decode($_POST['individual']);
    $matrimonial            = utf8_decode($_POST['matrimonial']);
    $queen_size             = utf8_decode($_POST['queen_size']);
    $king_size              = utf8_decode($_POST['king_size']);
    $nombre                 = utf8_decode($_POST['nombre']);
    $ciudad                 = utf8_decode($_POST['ciudad']);
    $telefono               = utf8_decode($_POST['telefono']);
    $email                  = utf8_decode($_POST['email']);

    $medida                 = $individual . " / " . $matrimonial . " / " .  $queen_size . " / " .  $king_size;

    require_once('./PHPMailer/class.phpmailer.php');

    //PHPMailer Object
    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    
    $mail->addAddress('frkalderon@gmail.com', 'Mail Unikonfort');
    $mail->addReplyTo("contacto@unikonfort.mx", "Reply");
    // $mail->addBCC("frkalderon@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Contacto Unikonfort Hogar";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p><b>Email: </b>". $email ."</p>";
    $mail->Body.= "<p><b>Telefono: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>Ciudad: </b>". $ciudad ."</p>";
    $mail->Body.= "<p><b>Firmeza: </b>". $firmeza ."</p>";
    $mail->Body.= "<p><b>Peso: </b>". $peso ."</p>";
    $mail->Body.= "<p><b>Solo o acompanado: </b>". $solo_acompanado ."</p>";
    $mail->Body.= "<p><b>Peso de la pareja: </b>". $peso_pareja ."</p>";
    $mail->Body.= "<p><b>Preferencia colchón: </b>". $preferencia_colchon ."</p>";
    $mail->Body.= "<p><b>Medida: </b>". $medida ."</p>";
    
    
    $mail->AltBody = "Nombre: " . $nombre;
    $mail->AltBody .= " // " . $ciudad;
    $mail->AltBody .= " // " . $telefono;
    $mail->AltBody .= " // " . $email;
    $mail->AltBody .= " // " . $firmeza;
    $mail->AltBody .= " // " . $peso;
    $mail->AltBody .= " // " . $solo_acompanado;
    $mail->AltBody .= " // " . $peso_pareja;
    $mail->AltBody .= " // " . $preferencia_colchon;
    $mail->AltBody .= " // " . $individual;
    $mail->AltBody .= " // " . $matrimonial;
    $mail->AltBody .= " // " . $queen_size;
    $mail->AltBody .= " // " . $king_size;
    

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}