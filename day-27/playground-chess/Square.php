<?php
require_once 'Piece.php';

class Square 
{
    public $pos_X = null;
    public $pos_Y = null;
    public $content = null;
    public $color = null;

    public function __construct($pos_X = null, $pos_Y = null, $content = null)
    {
        $this->pos_X = $pos_X;
        $this->pos_Y = $pos_Y;
        $this->content = $content;

        //define color based on square position
        //whites are all odd X on odd Y or all even X on even Y
        //blacks are all even X on odd Y or all odd X on even Y
        if ($this->pos_X % 2 != 0 && $this->pos_Y % 2 != 0) {
            $this->color = 'white';
        } elseif ($this->pos_X % 2 == 0 && $this->pos_Y % 2 == 0) {
            $this->color = 'white';
        } else {
            $this->color = 'black';
        }
    }

    public function __toString()
    {
        //render the piece to squere
        $piece = new Piece($this->content);

        //prepare position
        //define square size in px
        $square_size = 48;
        $position_of_square = 'style="left:' . ($this->pos_X * $square_size - $square_size) . 'px; bottom:' . ($this->pos_Y * $square_size - $square_size) . 'px;"';
        $class_of_square = 'class="square ' . $this->color . '" ';  
        return '
            <div ' . $class_of_square . $position_of_square . '>'
                . $piece->image_elm . 
            '</div>';
    }
}