<html>
    <head>
        <meta charset="utf-8">
        <title>Supprimer-Utilisateur</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-contact-form.css">
</head>

        <h2> Supprimer un utilisateur </h2>

        <form method="POST" action="back-office.php?page=delete-user-confirmed">
                <p>
                    <label>Login</label> : <input class="border" type="text" name="loginn" id="loginn" autofocus required/>
                </p>
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Supprimer</button>
                    </p>
                
            </form>
</div>