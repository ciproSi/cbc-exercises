<?php


function userFriendlyTime ($timeInMiliseconds) {
    $hours = floor($timeInMiliseconds / 3600);
    $minutes = floor(($timeInMiliseconds % 3600) / 60);
    $seconds = floor((($timeInMiliseconds % 3600) % 60));
    
    return $hours . ':' . $minutes . ':' . $seconds;
}

echo userFriendlyTime(128);

?>