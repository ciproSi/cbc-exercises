<?php

$first_name = 'Šimon';
$surname = 'Cipro';
$year_of_birth = 1986;
$height = 186;
define('SERVER_SOFT', 'Apache');
define('MY_OS', 'Mac OSX');

echo 'First name: ' . $first_name . '<br>';
echo 'Last name: ' . $surname . '<br>';
echo "Year of birth: {$year_of_birth}<br>";
echo "Height: {$height}<br>";
echo 'This script is running on: ' . SERVER_SOFT . '<br>';
echo 'Current operational system: ' . MY_OS . '<br>';

function greeting ($whom) {
    echo greet ($whom) . '<br>';
}

greeting('Šimon');
greeting($surname);

function greet ($whom) {
    return "Hello, you bastard, {$whom}";
}

echo greet('Darth Wader');


?>