<?php
function connect_to_database(){
    $servername ="localhost";
    $username="root";
    $pass ="root";
    $databasename="MyDevBlog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}

function affichearticles($pdo){
    $id = $_GET['id'];

        $article = $pdo->query("SELECT *
        FROM articles
        WHERE id = '$id' ")->fetchAll();

    echo "<h2>".$article[0]['titre']."</h2>";
    echo $article[0]['dates'];
    echo "<p>".$article[0]['introduction']."</p>";
    ?>
        
    <p><a href=<?php echo $article[0]['image1']?>> Ici se trouve une Image</a></p>
    
   <?php
    echo "<p>".$article[0]['texte1']."</p>";
}
$pdo = connect_to_database();
affichearticles($pdo);
?>