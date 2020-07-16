<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog - Admin</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-contact-form.css">
    </head>

    <body>
    <nav>
            <?php if($_GET['page'] == 'accueil-admin') : ?>
                        <strong><a style="color:#17c1ff" href="back-office.php?page=accueil-admin">Accueil - admin</a></strong>
                        <?php else : ?>
                    <a href="back-office.php?page=accueil-admin">Accueil - admin</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'ajout-articles') : ?>
                        <strong><a style="color:#17c1ff" href="back-office.php?page=ajout-articles">Ajouter des articles</a></strong>
                        <?php else : ?>
                    <a href="back-office.php?page=ajout-articles">Ajouter des articles</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'supprimer-articles') : ?>
                        <strong><a style="color:#17c1ff" href="back-office.php?page=supprimer-articles">Supprimer des articles</a></strong>
                        <?php else : ?>
                    <a href="back-office.php?page=supprimer-articles">Supprimer des articles</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'ajouter-utilisateurs') : ?>
                        <strong><a style="color:#17c1ff" href="back-office.php?page=ajouter-utilisateurs">Ajouter des utilisateurs</a></strong>
                        <?php else : ?>
                    <a href="back-office.php?page=ajouter-utilisateurs">Ajouter des utilisateurs</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'supprimer-utilisateur') : ?>
                        <strong><a style="color:#17c1ff" href="back-office.php?page=supprimer-utilisateur">Supprimer un utilisateur</a></strong>
                        <?php else : ?>
                    <a href="back-office.php?page=supprimer-utilisateur">Supprimer un utilisateur</a>
                    <?php endif; ?>
                   

        <header>
            <h1><br/>Objectif Zelda</h1>
        </header>

        <div class="main">

            <div class="image">
                <img src="Styles/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="200x200">
            </div>

            <div>
        <?php
    if($_GET['page'] == 'accueil-admin')
    {
        include('my-dev-blog.php');
    }
    elseif($_GET['page'] == 'ajout-articles')
    {
        include('ajout-articles.php');
    }
    elseif($_GET['page'] == '404')
    {
        include('404.php');
    }
    elseif($_GET['page'] == 'ajouter-utilisateurs')
    {
        include('ajout-utilisateurs.php');
    }
    elseif($_GET['page'] == 'utilisateurs')
    {
        include('utilisateurs.php');
    }
    elseif($_GET['page'] == 'confirmation-articles')
    {
        include('articles-ajoutés.php');
    }
    elseif($_GET['page'] == 'supprimer-articles')
    {
        include('supprimer-articles.php');
    }
    elseif($_GET['page'] == 'delete-confirmed')
    {
        include('delete-confirmed.php');
    }
    elseif($_GET['page'] == 'supprimer-utilisateur')
    {
        include('supprimer-utilisateurs.php');
    }
    elseif($_GET['page'] == 'delete-user-confirmed')
    {
        include('delete-user.php');
    }
    ?>
            </div>
         
        
            <div class="img">
                <img src="Styles/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="200x200">
            </div>
            
        </div>

        <?php
    include('footer.php')
    ?>