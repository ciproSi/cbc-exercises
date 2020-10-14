<?php

require_once '../../day-27/my-sql/sql-php/DB.php';
require_once '../../day-27/my-sql/sql-php/DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

//you can make as many conditions in the query as you need
// $query = "
//     SELECT *
//     FROM `cities`
//     WHERE `country_id` = ?
//     ORDER BY `district` DESC,
//              `population` ASC
             
// ";

// $cities = select($query, [56]);

// var_dump($cities);


// $query = "
//     SELECT *
//     FROM `cities`
//     ORDER BY `population` DESC
//     LIMIT 10, 10
// ";

// $cities = select($query);

// var_dump($cities);


function get_cities ($page_nr, $results_per_page = 20) {
    $ofset = ($page_nr - 1) * $results_per_page;
    $query = "
        SELECT *
        FROM `cities`
        LIMIT {$ofset}, {$results_per_page}
    ";
    $cities = select($query);    
    return $cities;
}

// $query = "
//     SELECT *
//     FROM `cities`
//     WHERE `name` LIKE ?
// ";

// $cities = select($query, ['%ville%']);
// var_dump($cities);

//10 largest cities (order by population) from the city table that are in one of the V4 countries: Czechia, Slovakia, Poland, Hungary
//IN - value in speciefied column must by one of the values in array 
$query = "
    SELECT *
    FROM `cities`
    WHERE `country_id` IN (?, ?, ?, ?)
    ORDER BY `population` DESC
    LIMIT 10
";

$cities = select($query, [56, 199, 172, 98]);
var_dump($cities);

