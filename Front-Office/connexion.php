<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2> Connexion</h2>

       <form method="POST" action="front.php?page=securite">
            <p>
                <label>Login</label> : <input class="hauteur" type="text" name="loginn" id="loginn" autofocus required/>
            </p>
             <p>
                <label>Password</label> : <input class="hauteur" type="password" name="passwordd" id="passwordd" required>
            </p>        
            <div class="bouton">
                <p>
                    <button type="submit" value="Connexion">Connexion</button>
                </p>
            </div>
        </form>
        
    </body>
</html>
