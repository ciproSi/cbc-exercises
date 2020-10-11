<?php
    //require libraries for "DB" access and manipulating data
    require_once './DBBlackbox.php';
    
    //is this creation or editing?
    if (isset($_GET['puppy_id'])) {
        //this is updating puppy
        //get the data from the "DB"
        $puppy = find($_GET['puppy_id']);

    } else {
        //this is creating new puppy
        
        //prepare empty data
        $puppy = [
            'name' => null,
            'breed' => null,
            'cuteness' => 10
        ];

    }

    //prepare querry string 
    if (isset($_GET['puppy_id'])) {
        $query_string = '?puppy_id=' . $_GET['puppy_id'];
    } else {
        $query_string = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The form</title>
</head>
<body>
    <nav>
        <a href="display-form.php">Create a new puppy</a>
    </nav>
    
    <form action="handle-form.php<?= $query_string ?>" method="POST">
        <label for="">
            Puppy name: <br>
            <input type="text" name="name" value="<?= $puppy['name'] ?>">
        </label>
        <br><br>
        <label for="">
            Breed: <br>
            <input type="text" name="breed" value="<?= $puppy['breed'] ?>">
        </label>
        <br><br>
        <label for="">
            Cuttenes level:<br>
            <select name="cuteness" id="">
                <option value="10" <?= $puppy['cuteness'] == 10 ? 'selected' : ''?>>10</option>
                <option value="9" <?= $puppy['cuteness'] == 9 ? 'selected' : ''?>>9</option>
                <option value="8" <?= $puppy['cuteness'] == 8 ? 'selected' : ''?>>8</option>
            </select>
        </label>
        <br><br>
        <button>Save</button>
    </form>
</body>
</html>