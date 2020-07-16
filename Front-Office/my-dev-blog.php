<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" href="Styles/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Styles/my-dev-blog-style.css">
    </head>

    <body>


       <div>
                <h2>Accueil</h2>

                    <h3>Description du Projet</h3>

                    <p>
                        Le projet que j'ai entrepris est de finir à 100% tous les jeux de la célèbre licence 
                        <i><b>The Legend of Zelda</b></i>.<br/> 
                        Dans cette Quête, les DLC sont aussi à finir afin de compléter le jeu.<br/>
                        Ce blog regroupe donc plusieurs articles sur l'avancée de ma Quête, 
                        les difficultés rencontrées et même quelques anecdotes sur la licence Nintendo.
                    </p>

                    <h3> Les cinq derniers articles</h3>

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
           
        }
    }
    $pdo=connect_to_database();
    function afficher_cinq_articles($pdo){
    $articles = $pdo->query("SELECT *
    FROM articles
    ORDER BY dates DESC
    LIMIT 5")->fetchAll();
    
    foreach ($articles as $articles){
        echo "<ul><li><h4>".$articles['titre']."</h4></li></ul>";
        echo "<p>".$articles['introduction']."</p>";
    }
}

   afficher_cinq_articles($pdo);
?>
          
                </div>
    </body>
</html>