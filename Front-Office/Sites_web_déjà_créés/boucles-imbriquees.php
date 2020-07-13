<?php

    function clock() 
    {

        for($hours=0;$hours<24;$hours++)
        { 
            for($minutes=0;$minutes<60;$minutes++)
            {
                if($hours>=10 and $minutes<10)
                {
                    echo "$hours : 0$minutes<br/>";
                }
                elseif($hours<10 and $minutes<10)
                {
                    echo "0$hours : 0$minutes<br/>";
                }
                elseif($hours>=10 and $minutes>=10)
                {
                    echo " $hours : $minutes<br/>";
                }
                elseif($hours<10 and $minutes>=10)
                {
                    echo "0$hours : $minutes<br/>";
                }
                
            }

        }

    }
    clock(); 
?>
