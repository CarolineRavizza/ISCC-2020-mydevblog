<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout-articles</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-contact-form.css">
    </head>


    <form  method="POST" action="back-office.php?page=confirmation-articles">
                <p>
                    <label>Date</label> : <input class="hauteur" type="date" name="dates" id="dates" autofocus required/>
                </p>
                <p>
                    <label>Numéro</label> : <input class="hauteur" type="number" name="id" id="id" required/>
                </p>
                <p>
                    <label>Titre</label> : <input class="hauteur" type="text" name="titre" id="titre" required>
                </p>
                <p>
                    <label>Introduction</label> : <input class="large" type="text" name="introduction" id="intoduction" required>
                </p>
                <p>
                    <label>Image</label> : <input type="file" name="image1" id="image1" require>
                </p>
                <p>
                    <label>Sous-titre</label> : <input class="hauteur" type="text" name="sous-titre1" id="sous-titre1" required>
                </p>
                <p>
                    <label>Article</label> : <input class="large" type="text" name="texte1" id="texte1" required>
                </p>
                
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Enregistrer</button>
                    </p>
</div>