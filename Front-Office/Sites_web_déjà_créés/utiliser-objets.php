<?php
    $date1 = new DateTime('13-07-2020 15:20:00', new DateTimeZone('Europe/Paris'));
    echo $date1 -> format('Y-m-d ');
    echo $date1 -> format('H-i-s');
    echo '<br/>';
    
    $date2 = new DateTime('22-06-2020 09:00:00', new DateTimeZone('Europe/Paris'));
    echo $date2 -> format('Y-m-d ');
    echo $date2 -> format('H-i-s');
    $diff =  $date2->diff($date1);
    echo $diff->format('<p> %d jours %h heures %i minutes %s secondes depuis le début de la piscine.</p>');
?>
