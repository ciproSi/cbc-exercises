<?php

function leave_hobbiton($party) {
    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
    return $party;
};

function go_to_bree($party) {
    $party['strider'] = 'Strider';
    return $party;

};

function go_to_weathertop(&$party) {
    $party = array_merge($party, [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
};


function meet_arwen (&$party) {
    $party['arwen'] = 'Arwen Undómiel';

    //in array_splice the array is passed by reference so no need to assign it anywhere
    array_splice($party, -10, 9);

};


function go_to_rivendell ($party) {
    unset($party['arwen']);
    $party = array_merge($party, [
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);
    $party['strider'] = 'Aragorn';
    
    return $party;
};

function go_to_moria ($party) {
    unset($party['gandalf']);
    return $party;
};

function go_to_falls_of_rauros (&$party) {
    $party = array_merge($party, array_fill(0, 1000, 'Orc'));
    unset($party['boromir']);
};

function break_party ($party) {
    $mordor_party = [];
    $mordor_party['frodo'] = $party['frodo'];
    $mordor_party['sam'] = $party['sam'];
    $mordor_party['ring'] = $party['ring'];

    $hunting_party = array_intersect_key($party, array_fill_keys([
            'strider', 'legolas', 'gimli'], null));

    $hungry_party = array_diff_key($party, $mordor_party, $hunting_party);

    return [
            $mordor_party,
            $hunting_party,
            $hungry_party
        ];

};

?>