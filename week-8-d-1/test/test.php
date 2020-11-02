<?php

$date = "2020-06-01";

function convertDate($date)
{
    $newDate = date("F jS, Y", strtotime($date));
    return $newDate;
}
echo convertDate($date);

$students = [
    8752 => 'Bob'
];

echo $students[8752];

class father 
{
    public $a = 0;
}

class son extends father
{
    public $a = 1;
}

$father = new father;
$son = new son;

echo $father->a;
echo $son->a; 
