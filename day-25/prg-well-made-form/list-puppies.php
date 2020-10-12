<?php
require_once 'DBBlackbox.php';

$puppies = select();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List puppies</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Puppy name</td>
                <td>Puppy breed</td>
                <td>Puppy cuteness</td>
                <td>Action</td>
                </tr>
        </thead>    
        <tbody>
        <?php include_once 'header.php'; ?>
        <?php foreach ($puppies as $puppy_id => $puppy) : ?>
            <tr>
                <td><?= $puppies[$puppy_id]['name']; ?></td>
                <td><?= $puppies[$puppy_id]['breed']; ?></td>
                <td><?= $puppies[$puppy_id]['cuteness'] ?></td>
                <td><a href="display-form.php?puppy_id=<?= $puppy_id ?>"">Update</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>    
    
</body>
</html>