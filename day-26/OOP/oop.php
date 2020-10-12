<?php
require_once 'User.php';

$viki = new User('Vikuš');

//accessing properties of object, done w/arrow and you can both read and write with that syntax
//writing
$viki -> id = 1;

//reading
echo 'User\'s name is ' . $viki->name . '<br>';

//calling a method

$viki->learn(20);

$viki->whatAreYouDoing();

var_dump($viki);
?>