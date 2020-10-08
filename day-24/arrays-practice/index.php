<?php
    $cars_i_want = [];
    
    $cars_i_want[] = 'Aston Martin';
    $cars_i_want[] = 'Ferrari';
    $cars_i_want[] = 'Lamborghini';
    $cars_i_want[] = 'Maserati';
    $cars_i_want[] = 'Mercedes';
    $cars_i_want[] = 'Porsche';
    $cars_i_want[] = 'Škoda';

    $car_prices = [
        'Škoda' => 270000,
        'Volkswagen Golf' => 170000,
        'BMW X6' => 380000,
        'Porsche 911' => 1150000
    ];

    // var_dump($cars_i_want);
    
    echo 'For myself I would by ' . $cars_i_want[1] . '<br>';
    echo 'For my better half I would by ' . $cars_i_want[3] . '<br>';

    $cars_i_want[4] = 'Smart';

    // var_dump($cars_i_want);

    echo 'Each of my kids will get ' . $cars_i_want[4] . '<br>';

    //find and echo key of a item of known value
    $key  = array_search(1150000, $car_prices);
    echo $key;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php 
            foreach ($cars_i_want as $car_name) {
                echo "<li>{$car_name}</li>";
            }
        ?>            
    </ol>

    <?= "You can have Porsche 911 for just {$car_prices['Porsche 911']}" ?>
    <ol>
        <?php foreach ($car_prices as $car_came => $car_price ) : ?>
            <li>The price of <?= $car_name ?> is <?= $car_price ?> </li>
        <?php endforeach; ?>
        
    </ol>

  
    
</body>
</html>


