<?php

require_once '../../day-27/my-sql/sql-php/DB.php';
require_once '../../day-27/my-sql/sql-php/DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');


// $query = "
//     SELECT *  
//     FROM `cities`
//     WHERE `id` = ?
// ";

// var_dump(select($query, [3339]));


// $query = "
//     UPDATE `cities`
//     SET `name` = ?
//     WHERE `id` = ?
// ";

// update($query, ['Prague', 3339]);

// $query = "
//     SELECT *  
//     FROM `cities`
//     WHERE `id` = ?
// ";

// var_dump(select($query, [3339]));

// //it's safer to limit the update when we know there is only (or should be) only one row to be updated 
// $query = "
//     UPDATE `cities`
//     SET `population` = ?
//     WHERE `id` = ?
//     LIMIT 1
// ";

// update($query, [1200000, 3339]);

// $query = "
//     SELECT *  
//     FROM `cities`
//     WHERE `id` = ?
// ";

// var_dump(select($query, [3339]));


// $query = "
//     SELECT *  
//     FROM `countries`
//     WHERE `name` = ?
// ";

// var_dump(select($query, ['Andorra']));

// $query = "
//     UPDATE `countries`
//     SET `head_of_state` = ?
//     WHERE `name` = ?
// ";

// update($query, ['Xavier Espot Zamora', 'Andorra']);

// $query = "
//     SELECT *  
//     FROM `countries`
//     WHERE `name` = ?
// ";

// var_dump(select($query, ['Andorra']));

$query = "
    SELECT *  
    FROM `countries`
    WHERE `head_of_state` = ?
";

var_dump(select($query, ['Mr. Trumputa']));

$query = "
    UPDATE `countries`
    SET `head_of_state` = ?
    WHERE `head_of_state` = ?
";

update($query, ['Mr. Trumpeta', 'Mr. Trumputa']);

$query = "
    SELECT *  
    FROM `countries`
    WHERE `head_of_state` = ?
";

var_dump(select($query, ['Mr. Trumpeta']));