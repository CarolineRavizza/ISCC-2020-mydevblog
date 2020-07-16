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
function deleteuser($pdo){
    try{ 
        $Login=$_POST['loginn'];

        if ($Login){
            $sql="DELETE FROM
            `utilisateurs`
            WHERE loginn = '$Login'";
            $pdo->exec($sql);
            echo '<p>Utilisateur supprimé de la base de données avec succès! </p>';
            echo "<p>Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=connexion'>ici</a> pour revenir à la page de connexion</p>";
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de suppression</p>' .$e->getMessage();
        }
    }
    
$pdo = connect_to_database();
deleteuser($pdo);
?>
