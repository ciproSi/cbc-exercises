<?php
require_once 'Match.php';

class FootballMatch extends Match
{
    public $length = 90;
    public $nr_of_players = 22;
    public $halves = ['0:0', '0:0'];
    public $nr_of_ofsides = 0;

}