<?php 
    $nom_produit = "T-shirt simple";
    $couleur = "Blanc";
    $prix = 10.50;
    $disponible = true;
    $quantite = 10;
    $cout = $prix*3;
    $cout_total =$prix*$quantite;

    //phrase 1//
    
    echo "<h3>Le nom du produit est $nom_produit.</h3>";

    //phrase 2//

    echo "<h3>Il reste $quantite produits en stock.</h3>";

    //phrase 3//
    echo "<h3> Le produit $nom_produit est de couleur $couleur.</h3>";

    //opération simple//

    //phrase 1//
    echo "<h4> Acheter 3 produits couterait $cout.</h4>";

    //phrase 2//
    echo "<h4> Acheter la totalité des produits disponibles couterait $cout_total.</h4>";

    //phrase 3//
    echo "<h4> Si 3 produits vendus";

    //condition 1//
    if($disponible==true)
    {
        echo "<p> Le produit $nom_produit est disponible en magasin.</p>";
    }
    else{
        echo "<p> Le produit $nom_produit n'est malheureusement plus disponible.</p>";
    }

    //condition 2//
    if($quantite>=5)
    {
    echo "<p> Il reste $quantite produits en magasin.</p>";
    }
    elseif($quantite<5 and $quantite>1)
    {
        echo "<p> Il ne reste plus que $quantite produits en magasin.</p>";
    }
    elseif($quantite==1)
    {
        echo "<p> Il ne reste plus qu'un produit en magasin. </p>";
    }
    elseif($quantite==0)
    {
        echo "<p> Il ne reste plus de produits en magasin. </p>";
    }
?>