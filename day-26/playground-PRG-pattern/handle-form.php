<?php
require_once 'Dog.php';
session_start();

//validation of data
$valid = true;
$errors = [];

if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'Name must be filled.';
}

if (!$valid) {
    $_SESSION['flashed_msgs'] = $errors;
    $_SESSION['flashed_data'] = $_POST;
    //prepare the query string
    $query_string = isset($_GET['dog_id']) ? '?dog_id=' . $_GET['dog_id'] : '';
    header('Location: index.php' . $query_string);
    exit();
}

//create and object (whole logic in the object declaration itself)
$dog = new Dog;

//set the object properties to inputed values
$dog->name = $_POST['name'] ?? $dog->name;
$dog->breed = $_POST['breed'] ?? $dog->breed;

//update existing dog or insert a new one and flash appropriate msg
if (isset($_GET['dog_id'])) {
    //update
    $dog->update();
    $_SESSION['flashed_msgs'] = ['Dog updated!'];

} else {
    //add new dog
    $dog->insert();
    $_SESSION['flashed_msgs'] = ['Dog saved!'];
}


//redirect back with get and id of the newly inserted or updated dog
header('Location: index.php?dog_id=' . $dog->id);
