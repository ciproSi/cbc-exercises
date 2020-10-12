<?php
$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
  ];
 
  $country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
  ];



foreach ($calling_codes as $country => $calling_code) {
    $calling_msg[$country] = "The calling code of {$country_names[$country]} is {$calling_code}";
}

var_dump($calling_msg);


