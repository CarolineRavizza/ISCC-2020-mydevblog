<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" href="Style/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Style/my-dev-blog-style.css">
    </head>

    <body>
        <header>
            <h1><br/>Objectif Zelda</h1>
        </header>

        <div class="main">
            <div class="image">
                <img src="Style/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="200x200">
            </div>
            <div>
            <?php if($_GET['page'] == 'accueil') : ?>
                        <strong><a style="color:#17c1ff" href="my-dev-blog.html">Accueil</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=accueil">Accueil</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'articles') : ?>
                        <strong><a style="color:#17c1ff" href="my-dev-blog-articles.html">Articles</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=articles">Articles</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'articles') : ?>
                        <strong><a style="color:#17c1ff" href="my-dev-blog-contact.html">Contact</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=contact">Contact</a>
                    <?php endif; ?>
                    <?php if($_GET['page'] == 'contact-form') : ?>
                        <strong><a style="color:#17c1ff" href="contact-form.php">Form Contact</a></strong>
                        <?php else : ?>
                    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=contact-form">Form Contact</a>
                    <?php endif; ?>
                </nav>
            </div>
            <?php
    if($_GET['page'] == 'accueil')
    {
        include('my-dev-blog.html');
    }
    elseif($_GET['page'] == 'articles')
    {
        include('my-dev-blog-articles.html');
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
    ?>
        </div>
            <div class="img">
                <img src="Style/13ec60a5b6d6aa4a85d566faae04c21c.jpg" width="200x200">
            </div>
            
        </div>
    <?php
    include('footer.php')
    ?>