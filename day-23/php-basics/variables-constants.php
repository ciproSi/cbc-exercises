<?php

$foo = 'Ahoj, good boy!';

echo $foo;
echo $foo;
echo $foo;


function bar($any) {
    //$foo is not defined here and will throw an error
    echo $foo;
    var_dump($foo);
    echo $any;
}

//constants are define like that and they are inmutable and are accessuible throughout the whole script
define('MY_NAME', 'Simon');

// echo MY_NAME;

var_dump($foo);

echo strtoupper($foo);
echo '<br>';
echo time();

