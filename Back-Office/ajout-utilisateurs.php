<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout-articles</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-contact-form.css">
</head>

        <h2> Ajouter un utilisateur </h2>

        <form method="POST" action="back-office.php?page=utilisateurs">
                <p>
                    <label>Login</label> : <input  type="text" name="loginn" id="loginn" autofocus required/>
                </p>
                <p>
                    <label>Password</label> : <input type="password" name="passwordd" id="passwordd" required></p>
                
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Enregistrer</button>
                    </p>
                
            </form>
</div>


