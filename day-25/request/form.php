<?php
    //handle the submission of the form when is's submitted (it's submitted to the same url)
    var_dump($_POST);

    $usr = $_POST['user'] ?? 'Guest';
    $psw = empty($_POST['psw']) ? 'You didn\'t tell us' : $_POST['psw'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling POST</title>
</head>
<body>

    <form action="" method="POST">
        <label for="user">Usr_name
            <input type="text" name="user">
        </label>
        <label for="">Psw:
            <input type="text" name="psw">
        </label>
        <input type="submit" value="Submit the form">        
    </form>
    <h2>Hello, <?= $usr ?></h2>
    <h3>Your supersecret password is: <?= $psw ?> </h3>
</body>
</html>