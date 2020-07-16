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

function ajoututilisateurs ($pdo){

    try{

     
            if (!empty($_POST['loginn']) && !empty($_POST['passwordd'])){
                $login=$_POST['loginn'];
                $password=$_POST['passwordd'];

                $requete=$pdo->query("SELECT loginn
                FROM utilisateurs");
                $res=$requete->fetchAll();
                $found = false;

                if ($res){
                    foreach($res as $user){
                        if ($user['loginn'] == $login) {
                            $found = true;
                        }
                    }
                    
                    if(!$found){
                        $sql="INSERT INTO utilisateurs (loginn, passwordd) VALUES('$login', '$password')";
                        $pdo->exec($sql);
                        echo '<p> Compte ajouté à la base de données.</p>';
                        echo '<p><a href="http://localhost:8888/ISCC-2020/ISCC-2020-mydevblog/Back-Office/back-office.php?page=ajouter-utilisateurs">Utilisateurs</a></p>';
                    } else{
                        echo "<p>Ce compte existe déjà.</p>";
                    }
                } else{
                    echo "<p>Ce compte n'a pas pu être enregistré dans la base de données. </p>";
                }
            }
        }
    catch(PDOException $e){
        echo "Login erreur" .$e->getMessage();

    }
}

$pdo= connect_to_database();
ajoututilisateurs($pdo);
?>
