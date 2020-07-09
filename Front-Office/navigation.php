<html>
    <head><title>Navigation</title></head>

    <body>

                <?php if ($nav_en_cours == 'accueil'):?>
                    <strong><a href="my-dev-blog.html" style="color: #17c1ff">Accueil</a></strong>
                <?php else:?>
                    <a href="my-dev-blog.html">Accueil</a>
                <?php endif;?>

                <?php if ($nav_en_cours == 'articles'):?>
                    <strong><a href="my-dev-blog-articles.html" style="color: #17c1ff">Articles</a></strong>
                <?php else:?>
                    <a href="my-dev-blog-articles.html">Articles</a>
                <?php endif;?>
   
                <?php if ($nav_en_cours == 'contact'):?>
                    <strong><a href="my-dev-blog-contact.html" style="color: #17c1ff">Contact</a></strong>
                <?php else:?>
                    <a href="my-dev-blog-contact.html">Contact</a>
                <?php endif;?>

    </body>
</html>