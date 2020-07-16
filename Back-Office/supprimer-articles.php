<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Supprimer-articles</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
    </head>


    <form  method="POST" action="back-office.php?page=delete-confirmed">
                <p>
                    <label>Numéro</label> : <input class="hauteur" type="number" name="id" id="id" required/>
                </p>
                <p>
                    <label>Titre</label> : <input class="hauteur" type="text" name="titre" id="titre" required>
                </p>
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Supprimer</button>
                    </p>
</div>