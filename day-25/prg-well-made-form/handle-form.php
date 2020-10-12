<?php

//require libraries for "DB" access
require_once './DBBlackbox.php';

//to have the possibility to flash data
session_start();

//validation of data
$valid = true;
$errors = [];


//validate all possible mistakes before redirecting (in order not to bother user with one by one mistake)
if (empty($_POST['name'])) {
    $valid = false;
    $errors[] = 'The name field is mandatory.';
}

if ($_POST['breed'] !== 'ESP') {
    $valid = false;
    $errors[] = 'That is unacceptable breed.';
}

//if validation fails, redirect user to back to correct the mistakes
if (!$valid) {
    
    //flash error messagess
    $_SESSION['flashed_messages'] = $errors;

    //flash submitted data (so the user sees the mistaken data)
    $_SESSION['flashed_data'] = $_POST;
    
    //prepare the query string before being redirect
    $query_string = isset($_GET['puppy_id']) ? '?puppy_id=' . $_GET['puppy_id'] : '';
    header('Location: display-form.php' . $query_string);
    exit();

}

//if there is no $_POST['name'], then keep the original value 
$puppy['name'] = $_POST['name'] ?? $puppy['name'];
$puppy['breed'] = $_POST['breed'] ?? $puppy['breed'];
$puppy['cuteness'] = $_POST['cuteness'] ?? $puppy['cuteness'];



//save the date to DB
//is this creation or editing?
if (isset($_GET['puppy_id'])) {
    update($_GET['puppy_id'], $puppy);
    $puppy_id = $_GET['puppy_id'];
    
} else {
    //this is creating new puppy
    $puppy_id = insert($puppy);
    
}

//flash success messagess
$_SESSION['flashed_messages'] = ['Puppy succesfully saved!'];

//redirect to the display form with the puppy id in querry 
header('Location: display-form.php?puppy_id=' . $puppy_id);



