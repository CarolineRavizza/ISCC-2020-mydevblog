<?php

    function compter($maximum){
        $it=0;
        while($it<=$maximum) 
        {
            echo $it;
            $it=$it+1;
            echo "<br/>";
        }
    }

    function compter_for($maximum){
        $it=0;
        for($it=0; $it<=$maximum; $it+1)
        {
            echo $it;
            $it=$it+1;
            echo "<br/>";
        }
    }
    compter(10);
    compter_for(10);
?>
