<?php

class Warehouse 
{
    public $name = null;
    protected $nr_of_crates = 0;
    protected $crates = [];

    public function addCrate ($content)
    {
        $this->crates[] = $content;
        $this->nr_of_crates++;
    }

}