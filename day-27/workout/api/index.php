<?php

include 'data.php';

require_once 'Celebrity.php';

$celebrities = [];

foreach ($data as $person) {
    $celebrity = new Celebrity;
    $celebrity->fill($person);
    array_push($celebrities, $celebrity);
}


header('Content-type: application/json');
echo json_encode($celebrities);
