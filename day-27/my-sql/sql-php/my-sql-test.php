<?php
require_once 'DB.php';
require_once 'DB_functions.php';

//connect to the correct DB (will be normally done by underlying framework like Laravel)

$success = connect('127.0.0.1', 'world', 'root', '');

$results = select('SELECT * FROM `countries` WHERE `population` > 20000000');

var_dump($results);

