<?php
    $nom        = "";
    $email      = "";
    $message    = "";

    //contiendra nos éventuels messages d'erreur de validation du form
    $errors = array();

    // si le formulaire à été soumis
    if(!empty($_POST)){
        $nom   = strip_tags($_POST['nom']);
        $email      = strip_tags($_POST['email']);
        $message  = strip_tags($_POST['message']);


        /* début de la validation */

        //nom
        //est-ce que la personne a renseigné son nom ?
        if (empty($nom)){
            $errors[] = "Veuillez renseigner votre nom !";
        }
        //validation de la longueur min.
        else if(strlen($nom) < 2){
            $errors[] = "Votre nom est court !";
        } 
        //validation de la longueur max.
        else if(strlen($nom) > 50){
            $errors[] = "Votre nom est fort long !";
        }

        //email
        if (empty($email)){
            $errors[] = "Veuillez renseigner votre email !";
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Votre email est chelou !";
        }

        if (empty($message)) {
            $errors[] = "Veuillez entrer un message !";
        }

        //si le form est valide, envoit le message
        if(empty($errors)){

            include("inc/mail.php");

        }
 
    }
?>