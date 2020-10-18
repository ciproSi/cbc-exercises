<?php
require_once 'Match.php';

class IceHockeyMatch extends Match
{
    public $length = 60;
    public $nr_of_players = 12;
    public $thirds = ['0:0', '0:0', '0:0'];

    public function getThirdScore($third_nr) 
    {
        return $this->thirds[$third_nr - 1];
    }

    public function setThirdScore ($third, $thirdscore = '0:0')
    {
        $this->thirds[$third - 1] = $thirdscore;
    }
}