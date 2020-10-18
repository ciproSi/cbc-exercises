<?php

require_once 'Match.php';
require_once 'FootballMatch.php';
require_once 'IceHocekyMatch.php';

$match = new FootballMatch('2020-10-16 13:05:20');

echo $match->getEstimatedEnd();

$icehockeymatch = new IceHockeyMatch('2020-10-16 13:05:20');


$icehockeymatch->setThirdScore(1, '1:1');

echo $icehockeymatch->getThirdScore(1);
