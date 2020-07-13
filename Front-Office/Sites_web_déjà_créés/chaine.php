<?php
    $str1 = "<p>La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, 
    du marketing et de la communication est un avantage sérieux et utile.</p>";
    $search  = array('La', 'la');
    $replace = array('LA', 'LA');

    //phrase 1//

    echo "<p>La chaine str1 contient ";
    echo strlen($str1);
    echo " caractères.</p>";

    //phrase 2//
    echo "<p>La chaine str1 contient ";
    echo str_word_count($str1);
    echo " mots.</p>";

    //phrase 3//
    echo strtolower($str1);

    //phrase 4//
    echo strtoupper($str1);

    //phrase 5//
    echo str_shuffle($str1);

    //phrase 6//
    echo str_replace($search, $replace, $str1);

    //phrase 7//
    echo str_replace("est un avantage sérieux et utile.", "", $str1);