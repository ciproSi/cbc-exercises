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

// $region = new Region('Krkonoše');
// $region->insert();

$query = "
    SELECT *
    FROM `regions`
";

var_dump(select($query));




// $region = select_one("SELECT * FROM `regions` WHERE `id` = ?", [10], 'Region');
// var_dump($region);
// $region->name = 'Middle America';
// $region->save();

// var_dump(select($query));

// $region->delete();


// $query = "
//     DELETE
//     FROM `regions`
//     WHERE `slug` LIKE '%america%'
// ";

// delete($query);

// $query = "
//     SELECT *
//     FROM `regions`
// ";

// var_dump(select($query));