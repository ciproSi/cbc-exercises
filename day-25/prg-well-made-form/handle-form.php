<?php

//require libraries for "DB" access
require_once './DBBlackbox.php';

//to have the possibility to flash data
session_start();

//if there is no $_POST['name'], then keep the original value
$puppy['name'] = $_POST['name'] ?? $puppy['name'];
$puppy['breed'] = $_POST['breed'] ?? $puppy['breed'];
$puppy['cuteness'] = $_POST['cuteness'] ?? $puppy['cuteness'];



//save the date to DB
//is this creation or editing?
if (isset($_GET['puppy_id'])) {
    //this is updating puppy
    $puppy = find($_GET['puppy_id']);
    $puppy['name'] = $_POST['name'];
    $puppy['breed'] = $_POST['breed'];
    $puppy['cuteness'] = $_POST['cuteness'];
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



