<?php
require_once 'Square.php';

class Board
{
    public $positions = [];

    public function __construct($array = null)
    {
        for ($y = 1; $y <= 8; $y++) {
            for ($x = 1; $x <= 8; $x++) {
                if (isset($array[$x][$y])) {
                    $this->positions[] = new Square($x, $y, $array[$x][$y]);    
                } else {
                    $this->positions[] = new Square($x, $y);
                }
            }
        
        }
    }
   
}