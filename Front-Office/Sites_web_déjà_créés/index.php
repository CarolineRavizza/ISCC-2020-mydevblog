<!DOCTYPE html>
<html>
    <head>
        <title>Summer Code Camp</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Styles/vitrine.css">
    </head>


    <body>
            <div class="nav">
                <nav class="a">
                <?php if($_GET['page'] == 'accueil') : ?>
                        <strong><a style="color:#17c1ff" href="index.php?page=accueil">Accueil</a></strong>
                        <?php else : ?>
                    <a href="index.php?page=accueil">Accueil</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'programme') : ?>
                        <strong><a style="color:#17c1ff" href="index.php?page=programme">Programme</a></strong>
                        <?php else : ?>
                    <a href="index.php?page=programme">Programme</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact') : ?>
                        <strong><a style="color:#17c1ff" href="index.php?page=contact">Contact</a></strong>
                        <?php else : ?>
                    <a href="index.php?page=contact">Contact</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact-form') : ?>
                        <strong><a style="color:#17c1ff" href="index.php?page=contact-form">Form Contact</a></strong>
                        <?php else : ?>
                    <a href="index.php?page=contact-form">Form Contact</a>
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