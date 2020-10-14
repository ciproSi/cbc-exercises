<?php

require_once '../../day-27/my-sql/sql-php/DB.php';
require_once '../../day-27/my-sql/sql-php/DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');


//not a safe way as there is risk of SQL injection
// $query = "
//     SELECT *
//     FROM `cities`
//     WHERE `population` > 1000000
//       AND `population` < 2000000
// ";

// $cities = select($query);

// var_dump($cities);


//safe way to  prevent sql injections
//replace values w/ question marks and send the values separetely as a array

$query = "
    SELECT *
    FROM `cities`
    WHERE `population` > ?
      AND `population` < ?
";

$cities = select($query, [1000000,2000000]);

var_dump($cities);