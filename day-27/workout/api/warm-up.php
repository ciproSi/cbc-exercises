<?php
$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];

$new_array = [];

foreach ($old_array as $key => $person) {
    
    $new_value = [
        'full_name' => $person['name'] . ' ' . $person['surname'],
        'job' => $person['occupation']
    ];
    array_push($new_array, $new_value);
}

var_dump($new_array);

$occupation = [];
foreach ($old_array as $key => $person) {
    $occupation[] = $person['occupation'];
}

var_dump($occupation);

class Person
{
    public $first_name = null;
    public $last_name = null;
    public $job = null;
}

$new_array_2 = [];

foreach ($old_array as $key => $person) {
    $person = new Person;
    $person->first_name = $old_array[$key]['name'];
    $person->last_name = $old_array[$key]['surname'];
    $person->job = $old_array[$key]['occupation'];
    array_push($new_array_2, $person);    
  
}

var_dump($new_array_2);
