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
    if(isset($_GET['id']) AND !empty($_GET['id'])) 
    {
        $get_id = htmlspecialchars($_GET['id']);
        $articles = $pdo->query("SELECT *
        FROM articles
        WHERE id = ? ")->fetchAll();
        $article->execute(array($get_id));
    }
    else 
    {
    die('Cet article n\'existe pas !');
    }
    
    foreach ($articles as $articles){
        echo "<h2>".$articles['titre']."</h2>";
        echo $articles['dates'];
        echo "<p>".$articles['introduction']."</p>";
        echo '<img src="Style/' . $data["image1"] . '">';
        echo "<p>".$articles['texte1']."</p>";
    
    }
}   
$pdo = connect_to_database();
affichearticles($pdo);
?>