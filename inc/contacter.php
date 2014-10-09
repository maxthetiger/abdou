<div id="content">
    <div id="contact">
        <h2>Me contacter</h2> 
        <form method="POST">
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="email" name="email" placeholder="Votre email">
            <textarea name="message" placeholder="Votre message"></textarea>
            <input type="submit" value="envoyer">

            <div class="error">
                <ul>
                    <?php 
                        //affiche les messages d'erreur contenu dans notre array, si l'array est vide, la boucle est ignorée.
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