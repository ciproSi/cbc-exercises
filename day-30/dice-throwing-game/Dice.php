<?php

class Dice
{
    public $rolled_nr = 1;
    public $sides = null;

    public function __construct($nr_of_sides)
    {
        $this->sides = $nr_of_sides;
    }
    
    public function Roll ()
    {
        $this->rolled_nr = strval(rand(1,$this->sides));
    }

    public function __toString()
    {
        $this->Roll();
        return $this->rolled_nr;
    }
}