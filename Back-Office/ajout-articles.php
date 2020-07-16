<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajout-articles</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
    </head>


    <form  method="POST" action="back-office.php?page=confirmation-articles">
                <p>
                    <label>Date</label> : <input type="date" name="dates" id="dates" autofocus required/>
                </p>

                <p>
                    <label>Titre</label> : <input type="text" name="titre" id="titre" required>
                </p>
                <p>
                    <label>Introduction</label> : <input type="text" name="introduction" id="intoduction" required>
                </p>
                <p>
                    <label>Image</label> : <input type="url" name="image1" id="image1" require>
                </p>
                <p>
                    <label>Article</label> : <input type="text" name="texte1" id="texte1" required>
                </p>
                
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Enregistrer</button>
                    </p>
</div>