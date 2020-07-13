
<?php
    function connect_to_database(){
        $servername = 'localhost';
        $username = 'root';
        $password = 'root';
        $databasename = "MyDevBlog";

        try{
            $pdo=new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Vous êtes connecté(e)s<br/>";
            return $pdo;
        }
        catch(PDOException $e) {
               
            return $pdo;
        }
    }

    function login($pdo)
    {
        try{
            if(!empty($_POST['loginn']) && !empty($_POST['passwordd'])){

                $login = $_POST['loginn'];
                $password = $_POST['passwordd'];
               $requete=$pdo->query("SELECT passwordd
                FROM `utilisateurs`
                WHERE loginn='$login'");
                $res=$requete->fetchAll();

                if($res) {
                    if($password == $res[0]['passwordd']){
                        echo "Connexion réussie: bon couple identifiant/mot de passe.<br/>";
                        $_SESSION['loginn'] = $login;
                        echo 'Login: '.$_SESSION['loginn'];
                        exit();
                    }
                    else{
                        echo "Mauvais couple identifiant/mot de passe.";
                    }
                }
                else{
                    echo "<a href='front.php?page=connexion'";
                }
            }
    
        }
        catch(PDOException $e) {
            echo "Login erreur" , $e->getMessage();
        }
    }

    function insertuser($pdo)
    {
        if($login['exist'] == '0'){
         $sql = "INSERT INTO utilisateurs(id,loginn,passwordd,)
        VALUES(' ', 'caroline','04022001','239780.jpg')";
        }
    }
    $pdo = connect_to_database();
    login($pdo);
    ?>
