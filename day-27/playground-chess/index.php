<?php

require_once 'Board.php';
require_once 'functions.php';

$pieces_positions = fen2array('rn1qkb1r/1p3ppp/p2pbn2/4p3/4P3/1NN1BP2/PPP3PP/R2QKB1R b KQkq - 0 8');

$board = new Board($pieces_positions);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chess board</title>
</head>
<body>
    <div class="board">
    <?php foreach ($board->positions as $position) {
        echo $position;
    } ?>
    </div>

</body>
</html>

