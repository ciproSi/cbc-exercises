<?php

require_once '../../day-27/my-sql/sql-php/DB.php';
require_once '../../day-27/my-sql/sql-php/DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

// $query = "
//     INSERT
//     INTO `regions`
//     (`name`, `slug`)
//     VALUES
//     (?, ?),
//     (?, ?),
//     (?, ?)
// ";

// insert($query, ['North America', 'north-america', 'Central America', 'central-america','South America', 'south-america']);

// $query = "
//     SELECT *
//     FROM `regions`
// ";

// var_dump(select($query));

require_once 'Region.php';

$region = new Region('Krkonoše');
$region->insert();

$query = "
    SELECT *
    FROM `regions`
";

var_dump(select($query));