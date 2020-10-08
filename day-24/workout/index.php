<?php

$name = 'Šimon Cipro';
$birth_month = '01';
$birth_day = '12';
$birth_year = '2016';
$this_year = date('Y');
$birth_date = $birth_month . '-' . $birth_day;

define('DATE_OF_BIRTH_FORMAT', 'm-d');
$today = date(DATE_OF_BIRTH_FORMAT);
$age = $this_year - $birth_year;

if ($today > $birth_date) {
    echo "{$name} turned {$age} this year. <br>";
} else {
    echo "{$name} will turn {$age} this year. <br>";
}


function getBirthdaySentence ($name, $year, $birth_year) {
    $age = $year - $birth_year;
    if ($age == 0) {
        return "In the year {$year} {$name} was born.<br>";
    } elseif ($age == 1) {
        return "In the year {$year} {$name} turned {$age} year.<br>";    
    } else {
        return "In the year {$year} {$name} turned {$age} years.<br>";
    }
}

for ($i = 0; $i <= $age; $i++) {
    $year = $birth_year + $i;
    echo getBirthdaySentence('Kilian', $year, 2016);
}

$timestamp = time();
echo $timestamp;



?>
