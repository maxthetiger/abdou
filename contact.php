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

            include("mail.php");

        }
 
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Guide de parapente au Maroc | Abderahim Derbani</title>
<meta name="Description" content="Abderrahim Derbani, guide de parapente au Maroc, sur les circuits d'Agadir et de Marrakech." />
<meta name="keywords" content="parapente, Maroc, Guide, Vacance, Abdou">
		
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	
	<script type="text/javascript" href="js/script.js"></script>
</head>

<body>
    
<div id="container">
    <a href="index.php">
        <div id="header">
            <div id="bijour">
                <span class="font85">Bijour</span><span class="font29">. Je suis <strong>Abderrahim Derbani</strong></span><br/>
                <span class="font23"> &nbsp;et je suis <strong><span class="font35">guide</span></strong> pour <strong><span class="font35">parapentistes</span></strong> au <strong><span class="font35">Maroc</span></strong></span>
            </div>
        </div>
    </a>

    
    <div id="content">
    
        <div id="contact">
            <h2>Me contacter
            <a href=""><img src="img/amoins.png" height="20" width="20"></a>
                <a href=""><img src="img/aplus.png" height="20" width="20"></a>
                </h2> 

                <form method="POST">
                    <input type="text" name="nom" placeholder="Votre nom">
                    <input type="email" name="email" placeholder="Votre email">
                    <textarea name="message" placeholder="Votre message"></textarea>
                    <input type="submit" value="envoyer">

                    <div class="error">
                        <ul>
                        <?php 
                            //affiche les messages d'erreur
                            //contenu dans notre array
                            //si l'array est vide, la boucle est ignorée
                            foreach($errors as $error){
                                echo '<li>' . $error . '</li>';
                            }
                        ?>
                        </ul>
                    </div>
                    <br />
                </form>
                

        </div>
 
    </div>
    
    <div class="clear"></div>
    
    <br /><br />
    
    <div id="footerborder"></div>
    
    <div id="footer">
    
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-5.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-5.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-23.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-23.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-3.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-3.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-22.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-22.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-6.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-6.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-36.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-36.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-10.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-10.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-11.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-11.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-12.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-12.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-24.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-24.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-26.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-26.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-30.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-30.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-41.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-41.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-31.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-31.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-32.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-32.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-43.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-43.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-1.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-1.jpg" class="pics"></a>
    <a rel="shadowbox" href="img/pic/abdou-parapente-maroc-46.jpg"><img src="img/pic/thumbs/abdou-parapente-maroc-46.jpg" class="pics"></a>
 

    <div class="clear"></div><br />
    
    <div id="subfooter">&copy;Abderrahim Derbani 2012 | site par <a href="http://www.webolic.com" target="_blank">Webolic</a></div>
    
    </div>
    
</div>


<script type="text/javascript"  src="http://code.jquery.com/jquery-1.8.3.min.js"></script>

    
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
$("a[rel=shadowbox]").fancybox({
				'cyclic' : 	true,
				//'autoScale' : 	true,
				'centerOnScroll ' :	true,
				'overlayOpacity' : 	0.8,
				'overlayColor' : '#000',
				'titleShow' : 	false,
				'transitionIn'	: 'fade',
				'transitionOut'	: 'fade'
			});
</script>

		
</body>
</html>
