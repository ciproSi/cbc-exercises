<?php
$movie_names = [
    'tt0468569' => 'Dark Knight', 
    'tt0050083' => '12 angry men', 
    'tt0108052' => 'Schindler\'s list',
    'tt0110912' => 'Pulp fiction',
    'tt0167260' => 'Lord of the Rings: Return of the King',
    'tt0111161' => 'The Shawshank redemption',
    'tt0071562' => 'The Godfather II',
    'tt0060196' => 'The good, the bad and the ugly',
    'tt0137523' => 'Fight club',
    'tt0068646' => 'The Godfather',
  ];

  $movie_ratings = [
    'tt0111161' => 9.2,
    'tt0068646' => 9.2,
    'tt0071562' => 9.0,
    'tt0468569' => 8.9, 
    'tt0050083' => 8.9, 
    'tt0108052' => 8.9,
    'tt0110912' => 8.9,
    'tt0167260' => 8.9,
    'tt0060196' => 8.9,
    'tt0137523' => 8.8
  ];

 //make just one array from those above
  $movies = [];
  foreach ($movie_names as $movie_key => $movie_name) {
      $movies[$movie_key] = [
        'name' => $movie_name,
        'rating' => $movie_ratings[$movie_key]
      ]; 
      
  }
  var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays practising</title>
</head>
<body>
    
    <h3>show list of movies and their rating</h3>
    <ol>
        <?php foreach ($movie_names as $movie_key => $movie_name) :?>
            <li><?php echo $movie_name . ': Rating: ' . $movie_ratings[$movie_key]   ?> </li>
        <?php endforeach;?>
    </ol>

    <h3>show list of movies sorted based on rating from worst rated or vice-versa</h3>
    <ol>
        <?php
            arsort($movie_ratings);
            foreach ($movie_ratings as $movie_key => $movie_rating) {
                echo "<li>{$movie_names[$movie_key]} has rating {$movie_rating}.</li>";
            }
        ?>
    </ol>
</body>
</html>