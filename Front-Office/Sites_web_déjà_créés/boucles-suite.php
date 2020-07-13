<?php

    function compter_dizaine($maximum)
    {
        $it=0;
        $dizaine=0;
        $centaine=0;

        for($it=0; $it<=$maximum; $it+=1)
        {
            echo $it;
            if($dizaine==10)
            { 
                $dizaine=0;
                if ($centaine!=100)
                    echo 'Ceci est une dizaine';
            }
            $dizaine=$dizaine+1;
            if($centaine==100)
            {
                echo 'Ceci est une centaine';
                $centaine=0;
            }
            $centaine++;
            echo "<br/>";
        }
    }
    compter_dizaine(100);
?>