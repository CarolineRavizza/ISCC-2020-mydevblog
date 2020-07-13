<?php
    function update_dispo($quantite)
    {
        if($quantite>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function restockage($quantite,$nb_ajout)
    {
        echo "<p> $nb_ajout produits ont été ajoutés au stock</p>";
        return $quantite+$nb_ajout;
    }
    function achat($quantite,$nb_achat)
    {
        echo "<p> $nb_achat produits ont été achetés</p>";
        return $quantite-$nb_achat;
    }
?>