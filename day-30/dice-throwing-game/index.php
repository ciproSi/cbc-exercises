<?php

use PhpParser\Node\Scalar\MagicConst\Dir;

require_once 'Dice.php';
$nr_of_dices = $_POST['dices'] ?? 1;
$nr_of_sides = $_POST['sides'] ?? 6;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dice Throwing Game</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">How many dices you wanna roll?<br>
            <input type="number" name="dices" value="<?= htmlspecialchars($nr_of_dices) ?>">
        </label>

        <br>
        <label for="sides">How many sides has the dice?</label>
        <select name="sides" id="">
            <option value="4" <?= $nr_of_sides == 4 ? 'selected' : '' ?>>4</option>
            <option value="6"<?= $nr_of_sides == 6 ? 'selected' : '' ?>>6</option>
            <option value="10"<?= $nr_of_sides == 10 ? 'selected' : '' ?>>10</option>
            <option value="20"<?= $nr_of_sides == 20 ? 'selected' : '' ?>>20</option>
        </select>

        <br>

        <button>Let's roll</button>

    </form>
    <div class="result-row">
        <?php for ($i = 0; $i < $nr_of_dices; $i++) : ?>
            <div class="result"><?= new Dice($nr_of_sides) ?></div>
        <?php endfor; ?>
    </div>

</body>
</html>