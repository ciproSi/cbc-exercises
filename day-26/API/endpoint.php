<?php

//pretending to access DB

//and we got this:
$movies = [
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight', 
    '12 angry men', 
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
];

//telling the browser which format are we serving
header('Content-type: application/json');

echo json_encode($movies);

