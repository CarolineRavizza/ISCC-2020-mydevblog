<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" href="Style/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Style/my-dev-blog-style.css">
    </head>

    <body>
    <nav>
            <?php if($_GET['page'] == 'accueil') : ?>
                        <strong><a style="color:#17c1ff" href="front.php?page=accueil">Accueil</a></strong>
                        <?php else : ?>
                    <a href="front.php?page=accueil">Accueil</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'articles') : ?>
                        <strong><a style="color:#17c1ff" href="front.php?page=articles">Articles</a></strong>
                        <?php else : ?>
                    <a href="front.php?page=articles">Articles</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact') : ?>
                        <strong><a style="color:#17c1ff" href="front.php?page=contact">Contact</a></strong>
                        <?php else : ?>
                    <a href="front.php?page=contact">Contact</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'connexion') : ?>
                        <strong><a style="color:#17c1ff" href="front.php?page=connexion">Connexion</a></strong>
                        <?php else : ?>
                    <a href="front.php?page=connexion">Connexion</a>
                    <?php endif; ?>
        <header>
            <h1><br/>Objectif Zelda</h1>
        </header>

        <div class="main">
            <div class="image">
                <img src="Style/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="250x200">
            </div>
            <div>

        <?php
    if($_GET['page'] == 'accueil')
    {
        include('my-dev-blog.php');
    }
    elseif($_GET['page'] == 'articles')
    {
        include('my-dev-blog-articles.php');
    }
    elseif($_GET['page'] == 'contact')
    {
        include('my-dev-blog-contact.html');
    }
    elseif ($_GET['page'] == 'Erreur-404') {
        include('404.php');
    }
    elseif ($_GET['page'] == 'contact-form') {
        include('contact-form.php');
    }
    elseif ($_GET['page'] == 'connexion') {
        include('connexion.php');
    }
    elseif ($_GET['page'] == 'securite') {
        include('securite.php');
    } 
    elseif ($_GET['page'] == 'article') {
        include('article.php');
    } 
    ?>
    <?php
    session_start();
    if(isset($_SESSION['loginn']))
    {
        echo '<p> Login: ' .$_SESSION['loginn']. '</p>';
        if($_COOKIE['loginn'])
        {
            $_SESSION['loginn'] = $_COOKIE['loginn'];
        }
        else
        {
        echo "<p> Cliquez <a href='front.php?page=connexion'>ici</a> pour vous connecter.</p>";
        }
    }

?>
            </div>
         
        
            <div class="img">
                <img src="Style/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="250x200">
            </div>
            
        </div>
        
    <?php
    include('footer.php')
    ?>