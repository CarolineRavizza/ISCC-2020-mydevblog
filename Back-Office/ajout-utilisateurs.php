<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="Style/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Style/my-dev-blog-style.css">

    </head>
<?php
session_start();
function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "MyDevBlog";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return($pdo);
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
connect_to_database();

function login ($pdo){
    try{
            if (!empty($_POST['loginn']) && !empty($_POST['passwordd'])){
                $login=$_POST['loginn'];
                $password=$_POST['passwordd'];

                $requete=$pdo->query("SELECT loginn
                FROM utilisateurs");
                $res=$requete->fetchAll();

                if ($res){

                    if($login == $res[0]['loginn']){
                        echo "<p> Ce compte existe déjà.</p>";
                        $sql= "UPDATE utilisateurs
                        SET passwordd='$password'
                        WHERE loginn='$login'";
                        $pdo->exec($sql);
                        echo '<p> Compte ajouté à la base de données.</p>';
                    }
                }
                    else{
                        echo "<p>Ce compte n'a pas pu être enregistré dans la base de données. </p>";
                        }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
login($pdo);
?>
</html>