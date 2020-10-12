<?php

session_start();

require_once 'Dog.php';

$dog = new Dog;

//prepare query string
$query_string = isset($_GET['dog_id']) ? '?dog_id=' . $_GET['dog_id'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogbase</title>
</head>
<body>
    <nav>
        <a href="index.php" >Create new dog</a>
    </nav>
    
    <?php foreach ($dog->flashed_msgs as $msg) : ?>
        <h4><?= $msg ?></h4>
    <?php endforeach; ?>

    <form action="handle-form.php<?= $query_string ?>" method="POST">
        <label for="name">
            Name:
            <input type="text" name="name" value="<?= $dog->name ?>">
            <br>
        </label>
        
        <label for="breed">
        Breed:
            <input type="text" name="breed" value="<?= $dog->breed ?>">
            <br>
        </label>
        
        <button>Save dog</button>
    </form>
</body>
</html>