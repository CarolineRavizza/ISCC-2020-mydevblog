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
                    <label>Date</label> : <input type="date" name="dates" id="dates" required/>
                </p>
                <p>
                    <label>Titre</label> : <input type="text" name="titre" id="titre" required>
                </p>
                    <div class="bouton">
                        <p>
                    <button type="submit" value="Envoyer">Supprimer</button>
                    </p>
</div>