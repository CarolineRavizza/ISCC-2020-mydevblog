<?php
    $historique_commandes = array("5.49", "9.99", "5.49", "15.99", "25");
    $somme=0;

    function afficher_commandes($historique_commandes)
    {
        foreach ($historique_commandes as $value) 
        {
            echo "Une commande de $value euros a été reçue.<br/>"; 
            $somme+= +$value;
        }

        echo "Le total des commandes est de $somme euros";
    }

    afficher_commandes($historique_commandes)
?>
