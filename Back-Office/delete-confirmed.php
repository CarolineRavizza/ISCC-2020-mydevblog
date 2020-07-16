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
function deletearticles ($pdo){
    try{ 
        $Numero=$_POST['id'];



        if ($Numero){
            $sql="DELETE FROM
            `articles`
            WHERE id = $Numero";
            $pdo->exec($sql);
            echo '<p>Article supprimé de la base de données avec succès! </p>';
            echo "<p>Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=articles'>ici</a> pour revenir aux articles</p>";
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de suppression</p>' .$e->getMessage();
        }
    }
    
$pdo = connect_to_database();
deletearticles($pdo);
?>
