<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" href="Style/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Style/my-dev-blog-style.css">
    </head>

    <body>
        <h2> Les Articles</h2>
        
        <?php
    function connect_to_database(){
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $databasename = "MyDevBlog";

        try{
            $pdo=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e) {
            echo "<p>Vous n'êtes pas connecté</p>".$e->getMessage();
        }
    }
    $pdo = connect_to_database();
    $articles = $pdo->query("SELECT * FROM articles")->fetchAll();


    foreach ($articles as $articles){
        echo "<ul><li><h4>".$articles['titre']."</h4></li></ul>";
        echo $articles['date'];
        echo "<p>".$articles['introduction']."</p>";
        echo "<a href='front.php?page=article".$article['id']."> Lire plus...</a>";
    }
?>

    </body>
</html>