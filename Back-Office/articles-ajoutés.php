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
        echo "connexion succes";
    }
    catch(PDOException $e){
        echo "Erreur : " .$e->getMessage();

    }
}
function ajoutarticles ($pdo){
    try{ 
        $Titre=$_POST['titre'];
        $Introduction=$_POST['introduction'];
        $Article=$_POST['texte1'];
        $Dates=$_POST['dates'];
        $Image=$_POST['image1'];



        if (!empty($Dates) && !empty($Titre) && !empty($Introduction) && !empty($Article)){
            $Article=addslashes($Article);
            $Introduction=addslashes($Introduction);

            $sql="INSERT INTO
            articles (dates, id, titre, introduction, image1, texte1)
            VALUES('$Dates' , '', '$Titre' , '$Introduction' , '$Image' , '$Article')";
            $pdo->exec($sql);
            echo '<p>Article ajouté à la base de données avec succès! </p>';
            echo "<p>Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Front-Office/front.php?page=articles'>ici</a> pour revenir aux articles</p>";
            }
        }
        catch(PDOException $e){
            echo '<p> Erreur de publication</p>' .$e->getMessage();
        }
    }
    
$pdo = connect_to_database();
ajoutarticles($pdo);
?>
