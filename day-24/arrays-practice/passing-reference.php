<?php

// function add_item (&$array, $item) {
//     $array[] = $item;
// }

// $my_array = [
//     'Šimon',
//     'Kája',
//     'Viky',
//     'Kili'
// ];

// var_dump($my_array);
// add_item($my_array, 'Petr');
// var_dump($my_array);

function element ($elm, $inner_html = '', $attributes = '') {
    return "<{$elm} {$attributes}>{$inner_html}</{$elm}>";
}
echo element('div', 'Kilián', 'style="font-weight: bold;"');

function convert_weight ($weight, $unit = 'kg') {
    if ($unit === 'kg') {
        echo $weight . ' kg = ' . $weight * 2.20462262 . ' lb<br>';
    } else {
        echo $weight . ' lb = ' . $weight / 2.20462262 . ' kg<br>';
    }
}
convert_weight(5);
convert_weight(11.0231131, 'lb');



?>

