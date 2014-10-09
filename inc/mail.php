<?php

    include("phpMailer/PHPMailerAutoload.php"); //chargera les fichiers nécessaires

    $mail = new PHPMailer();        //Crée un nouveau message (Objet PHPMailer)
    $mail->CharSet = 'UTF-8';       //Encodage en utf8

    //INFOS DE CONNEXION
    $mail->isSMTP();                                    //On utilise SMTP
    $mail->Username = "machinchoseformation@gmail.com"; //nom d'utilisateur
    $mail->Password = "38Utc_Sd5KdI4sz0Gr2Y4g";         //mot de passe
    $mail->Host = 'smtp.mandrillapp.com';               //smtp.gmail.com pour gmail
    $mail->Port = 587;                                  //Le numéro de port
    $mail->SMTPAuth = true;                             //On utilise l'authentification SMTP ?
    //$mail->SMTPSecure = 'tls';                        //décommenter pour gmail

    //CONFIGURATION DES PERSONNES
    $mail->setFrom($email, $nom);                   //qui envoie ce message ? (email, noms)
    $mail->addReplyTo($email, $nom);             //à qui répondre si on clique sur "reply" (email, noms)
    $mail->addAddress('machinchoseformation@gmail.com', 'Guillaume Sylvestre');   //destinataire
    
    //CONFIGURATION DU MESSAGE
    $mail->isHTML(true);                                // Contenu du message au format HTML
    $mail->Subject = 'Message de parapente abdou !';                                //le sujet
    //le message

    $mail->Body =   $message   ;                            

    //envoie le message
    if (!$mail->send()) {
        //echo "Mailer Error: " . $mail->ErrorInfo;
        $errors[] = "Erreur lors de l'envoi du message";
    } 
    else {
        $mailSent = true;
    }
?>