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
    <?php for ($x=1; $x < 9; $x++) : ?>
        <div class="row">
        <?php for ($i=0; $i < 4; $i++) : ?>
            <?php if ($x % 2 == 0) : ?>
                <div class="black"></div>
                <div class="white">
                    <?php
                        if ($i == 0 && $x == 4) {
                            echo "<img src=\"king.png\"\>";
                            } elseif ($i == 2 && $x == 8) {
                                echo "<img src=\"queen.png\"\>";
                            }
                    ?>
                </div>
            <?php else : ?>
                <div class="white"></div>
                <div class="black"></div>
            <?php endif; ?>
        <?php endfor; ?>
        </div>
    <?php endfor; ?>
</div>
</body>
</html>
