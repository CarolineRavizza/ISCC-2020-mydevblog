<?php
    $panier=[
        ['T-shirt rouge', 15.50, 5],
        ['T-shirt vert', 15.50, 6],
        ['T-shirt argent', 16.50, 8],
        ['Short bleu', 16.50, 5],
        ['Short vert', 19.99, 5],
        ['Veste argent', 19.99, 10],
        ['Veste argent', 35, 3]];
    
    function afficher_panier($panier)
    {

        foreach ($panier as $key => $value){
           echo '<ul>
            <li>'.$value[0].'</li>
            <li>'.$value[1].'</li>
            <li>'.$value[2].'</li>
            </ul>';
        }
    }
    function calculer_total_panier($panier)
    {
        $total=0;
        foreach($panier as $key => $value){
            $total+= $value[1]*$value[2];
        }
        echo "<p> Le prix total du panier est de $total euros. </p>";
    }
    afficher_panier($panier);
    calculer_total_panier($panier)
?>