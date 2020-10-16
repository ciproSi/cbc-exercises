<?php

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Game.php';
require_once 'Genre.php';

connect('127.0.0.1', 'games', 'root', '');

//safe request, set default values if needed
$order_by = $_GET['orderby'] ?? 'name';
$way = $_GET['way'] ?? 'asc';

//protect from setting request values differently = validation
if (!in_array($order_by, [
    'name',
    'rating',
    'id',
    'rating'
])) {
    exit('Nope, query is not valid!');
}

if (!in_array($way, [
    'asc',
    'desc'
])) {
    exit('Nope, query is not valid!');
}



if ($order_by == 'name' && $way == 'asc') {
    //by name ascending
    $query = "
    SELECT *
    FROM `games`
    ORDER BY `name` ASC
    ";
} else if ($order_by == 'name' && $way == 'desc') {
    //by name descending
    $query = "
        SELECT *
        FROM `games`
        ORDER BY `name` DESC
    ";
} else if ($order_by == 'rating' && $way == 'desc') {
    //by rating descending
    $query = "
        SELECT *
        FROM `games`
        ORDER BY `rating` DESC
    ";
} else if ($order_by == 'rating' && $way == 'asc') {
    //by rating ascending
    $query = "
        SELECT *
        FROM `games`
        ORDER BY `rating` ASC
    ";
}

$games = select($query, [], 'Game');
$games_by_ids = [];

foreach ($games as $game) {
    $games_by_ids[$game->id] = $game;
}


//get the genres
$query = "
    SELECT *
    FROM `genres`
";
$genres = select($query, [], 'Genre');


$genres_by_id = []; 
foreach ($genres as $genre) {
    $genres_by_id[$genre->id] = $genre;
}
//array of games ids to be able to formulate query 
$game_ids = [];
foreach ($games_by_ids as $game) {
    $game_ids[] = $game->id;
}
//get the correct number of question marks for query
$question_marks = join(',', array_fill(0, count($game_ids), '?'));

$query = "
    SELECT *
    FROM `game_genre`
    WHERE `game_id` IN ({$question_marks})
";

$game_genre = select($query, $game_ids);

foreach ($game_genre as $game_genre) {
    $games_by_ids[$game_genre->game_id]->addGenre($genres_by_id[$game_genre->genre_id]);
}
// var_dump($games_by_ids); die();


header('Content-type: application/json');

echo json_encode($games);

