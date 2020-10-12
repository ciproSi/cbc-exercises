<?php
$page_title = 'Shopping list';
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$items = [];

if (!empty($_POST['items'])) {
//same as if (isset($_POST['items']) && $_POST['items'] != [])
    var_dump($_POST['items']);
    $items = $_POST['items'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>
    <h1><?= $page_title ?></h1>
    <?php if ($page == 'home') : ?>
        
        <?php include 'home.php' ?>
    
    <?php elseif ($page == 'form') : ?>

        <?php include 'form.php' ?>

    <?php endif; ?>

</body>
</html>