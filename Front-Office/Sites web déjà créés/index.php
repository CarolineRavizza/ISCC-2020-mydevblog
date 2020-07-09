<!DOCTYPE html>
<html>
    <head>
        <title>Summer Code Camp</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style/vitrine.css">
    </head>


    <body>
            <div class="nav">
                <nav class="a">
                <?php if($_GET['page'] == 'accueil') : ?>
                        <strong><a style="color:#17c1ff" href="vitrine-accueil.html">Accueil</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/index.php?page=accueil">Accueil</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'programme') : ?>
                        <strong><a style="color:#17c1ff" href="vitrine-programme.html">Programme</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/index.php?page=programme">Programme</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact') : ?>
                        <strong><a style="color:#17c1ff" href="vitrine-contact.html">Contact</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/index.php?page=contact">Contact</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact-form') : ?>
                        <strong><a style="color:#17c1ff" href="contact-form.php">Form Contact</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/index.php?page=contact-form">Form Contact</a>
                    <?php endif; ?>
                </nav>
            </div>
            <?php include('header.php');?>

            <?php
    if($_GET['page'] == 'accueil')
    {
        include('vitrine-accueil.html');
    }
    elseif($_GET['page'] == 'programme')
    {
        include('vitrine-programme.html');
    }
    elseif($_GET['page'] == 'contact')
    {
        include('vitrine-contact.html');
    }
    elseif ($_GET['page'] == 'Erreur-404') {
        include('404.php');
    }
    elseif ($_GET['page'] == 'contact-form') {
        include('contact-form.php');
    }
    include('footer.php')
    ?>
    </body>
</html>