<html>
    <head><title>navigation</title></head>

    <body>
        <ul id="navigation">
            <li>
                <?php if ($nav_en_cours == 'accueil'):?>
                    <strong><a href="vitrine-accueil.html" style="color: #17c1ff">Accueil</a></strong>
                <?php else:?>
                    <a href="vitrine-accueil.php">Accueil</a>
                <?php endif;?>
            </li>
            <li>
                <?php if ($nav_en_cours == 'programme'):?>
                    <strong><a href="vitrine-programme.php" style="color: #17c1ff">Programme</a></strong>
                <?php else:?>
                    <a href="vitrine-programme.php">Programme</a>
                <?php endif;?>
            </li>
            <li>
                <?php if ($nav_en_cours == 'contact'):?>
                    <strong><a href="vitrine-contact.php" style="color: #17c1ff">Contact</a></strong>
                <?php else:?>
                    <a href="vitrine-contact.php">Contact</a>
                <?php endif;?>
            </li>
        </ul>
    </body>
</html>
