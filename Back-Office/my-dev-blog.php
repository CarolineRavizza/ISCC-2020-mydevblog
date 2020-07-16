<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" href="Style/my-dev-blog-fonts.css">
        <link rel="stylesheet" href="Style/my-dev-blog-style.css">
    </head>

    <body>


       <div>
                <h2>Accueil - Admin</h2>

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
                    function selectarticles ($pdo){
                        try{
                            $Dates=$_POST['dates'];
                            if (($Dates)){
                                $sql="SELECT * FROM `articles` ORDER BY $Dates DESC";
                                $pdo->exec($sql);
                            }
                        }
                        catch(PDOException $e) {
                           
                        }
                    }
                        $pdo = connect_to_database();
                        selectarticles($pdo);
                ?>
                </div>
            </body>
        </html>