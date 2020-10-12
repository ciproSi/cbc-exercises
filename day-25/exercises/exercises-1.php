<?php

function headline ($text) {
    return '<h1>' . $text . '</h1>';
}

echo headline('ahoj');


$celsius = 100;

function celsiusToFahrenheit ($temp) {
    $fahrenheit = (9/5) * $temp +32;
    return $fahrenheit;
}

echo celsiusToFahrenheit($celsius);


$measuredTemp = 2.2;
function isHealthy ($temp,$unit = 'c') {
    if ($unit == 'f') {
        $temp = celsiusToFahrenheit($temp);
    }
    if ($temp > 37 && $temp < 38) {
        $healthStatus = 'higher temperature';
    } elseif ($temp > 38 && $temp < 40) {
        $healthStatus = 'fewer';
    } elseif ($temp >= 40 ) {
        $healthStatus = 'very high fewer';
    } else {
        $healthStatus = 'normal.';
    }
    return 'Temperature ' . $temp . ' is ' . $healthStatus . '.<br>';
}

echo isHealthy($measuredTemp, 'f');

$number = 100;

function evenOrOdd ($number) {
   return $number % 2 == 0 ? 'even<br>' : 'odd<br>';
}

echo $number . ' is ' . evenOrOdd($number);

function languageUsage ($lang) {
    switch ($lang) {
        case 'php':
            return  strtoupper($lang) . ' is serverside language.';
            break;
        case 'javascript':
            return  'clientside';
            break;
        default:
            return 'no lng was asked';
            break;
    }
}

echo languageUsage('php');

// $age > 34 && !$employed
$age = 17;
if ($age < 18) {
    echo 'not yet 18';
}


$test = 0;

if ('a') {
    echo 'a is true';
}
